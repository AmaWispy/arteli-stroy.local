<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AuthorController extends Controller
{
    public function getIndex()
    {
        $authors = Author::all();

        return view('dashboard.authors.index', ['authors' => $authors]);
    }

    public function getCreatePage()
    {
        return view('dashboard.authors.create');
    }

    public function getUpdatePage($id)
    {
        $author = Author::findOrFail($id);

        return view('dashboard.authors.update', ['author' => $author]);
    }

    public function createAuthor(Request $request)
    {
        $fields = $request->validate([
            'name' => ['required', 'max:255'],
            'slug' => ['required', 'max:255', 'unique:authors'],
            'title' => ['required', 'max:255'],
            'description' => ['required'],
            'image' => ['required', 'max:255'],
            'content' => ['required'],
        ]);

        $fields['published'] = $request->published === 'on' ? true : false;

        $newAuthor = Author::create($fields);

        if ($newAuthor) {
            return redirect('/dashboard/authors/' . $newAuthor->id)->with('status', 'Автор успешно создан');
        }

        return back()->with('status', 'Ошибка при создании автора');
    }

    public function updateAuthor(Request $request)
    {
        $fields = $request->validate([
            'name' => ['required', 'max:255'],
            'slug' => ['required', 'max:255', Rule::unique('authors')->ignore($request->id)],
            'title' => ['required', 'max:255'],
            'description' => ['required'],
            'image' => ['required', 'max:255'],
            'content' => ['required'],
        ]);

        $fields['published'] = $request->published === 'on' ? true : false;

        $author = Author::find($request->id);

        if (!$author) {
            return redirect('/dashboard/authors')->with('status', 'Автора не существует');
        }

        foreach ($fields as $key => $value) {
            $author[$key] = $value;
        }

        $author->save();

        return back()->with('status', 'Автор успешно обновлен');
    }

    public function deleteAuthor(Request $request)
    {
        $author = Author::findOrFail($request->id);

        if ($author->delete()) {
            return redirect('/dashboard/authors')->with('status', 'Автор успешно удален!');
        }

        return back()->with('status', 'Ошибка при удалении автора!');
    }
}
