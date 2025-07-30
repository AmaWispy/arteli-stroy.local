<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Menu;
use App\Models\Service;
use Illuminate\Http\Request;

class MenuController extends Controller {
    public function showIndex() {
        $oldServices = Article::where('category_id', '<>', 11)->get()->map(function ($article) {
            return [
                'slug' => $article->link,
                'title' => $article->h1,
                'version' => 'old',
                'category' => $article->category->title
            ];
        });

        $newServices = Service::all()->map(function ($article) {
            return [
                'slug' => $article->slug,
                'title' => $article->h1,
                'version' => 'new',
                'category' => $article->category->title
            ];
        });

        $links = collect($oldServices)->merge($newServices)->unique('slug');

        $menu = Menu::all()->first();

        return view('dashboard.menu.index', ['links' => $links, 'menu' => $menu]);
    }

    public function saveMenu(Request $request) {
        $menuJson = json_encode($request->menu);
        // dd($request->menu);

        $menu = Menu::all()->first();

        if(!$menu) {
            $menu = new Menu;
        }

        $menu->menu = $menuJson;

        $saved = $menu->save();

        if($saved) {
            return back()->with('status', "Меню успешно сохранено");
        } else {
            return back()->with('status', "Произошла ошибка при сохранении");
        }
    }
}