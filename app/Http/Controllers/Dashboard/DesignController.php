<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Article;
use Illuminate\Http\Request;

class DesignController extends Controller
{
    public function changeDesign(Request $request)
    {
        $id = $request->id;

        $article = Article::find($id);
        $service = Service::find($id);

        if (!($article && $service) || $article->link !== $service->slug) {
            return back()->with('status', 'Отсутсвует экземпляр статьи в другой группе');
        }

        if ($article->new_design) {
            $article->new_design = false;

            if ($article->save()) {
                return redirect('/dashboard/' . $id)->with('status', "Дизайн сменен на старый");
            }
        } else {
            $article->new_design = true;

            if ($article->save()) {
                return redirect('/dashboard/services/' . $id)->with('status', "Дизайн сменен на новый");
            }
        }

        return back()->with('status', 'Произошла ошибка');
    }
}
