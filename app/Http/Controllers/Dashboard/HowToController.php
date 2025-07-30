<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\HowTo;
use Illuminate\Http\Request;

class HowToController extends Controller {
    // GET

    public function getIndex() {
        $items = HowTo::all()->toArray();

        return view('dashboard.how-to.index', ['items' => $items]);
    }

    public function newHowTo() {
        return view('dashboard.how-to.new');
    }

    public function editHowTo($id) {
        $howTo = HowTo::findOrFail($id);

        return view('dashboard.how-to.edit', ['howTo' => $howTo]);
    }


    //POST

    public function createHowTo(Request $request) {
        $fields = $request->validate([
            'title' => ['required', 'max:255'],
            'link' => ['required', 'max:255']
        ]);

        $created = HowTo::create($fields);

        if($created) {
            return redirect('/dashboard/how-to/' . $created->id)->with('status', 'Инструкция успешно создана!');
        }

        return back()->with('status', 'Ошибка!');
    }

    public function updateHowTo(Request $request) {
        $fields = $request->validate([
            'title' => ['required', 'max:255'],
            'link' => ['required', 'max:255']
        ]);

        $howTo = HowTo::find($request->id);

        if (!$howTo) {
            return redirect('/dashboard/how-to')->with('status', 'Инструкции не существует!');
        }

        foreach ($fields as $key => $value) {
            $howTo[$key] = $value;
        }

        $howTo->save();

        return back()->with('status', 'Инструкция успешно обновлена!');
    }

    public function deleteHowTo(Request $request)
    {
        $howTo = HowTo::findOrFail($request->id);

        if ($howTo->delete()) {
            return redirect('/dashboard/how-to')->with('status', 'Инструкция успешно удалена!');
        }

        return back()->with('status', 'Ошибка при удалении инструкции!');
    }
}