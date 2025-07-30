<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
    public function getView($article) {
        $page = Article::firstWhere('link', '=', 'articles/' . $article);

        if(!$page) {
            return response()->view('errors.404', status: 404);
        }

        $page->timestamps = false;
        $page->incrementViewsCount();
        $page->timestamps = true;

        return view('pages.article-page', ['page' => $page]);
    }
}
