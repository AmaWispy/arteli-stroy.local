<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Page;
use App\Models\Portfolio;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class PageController extends Controller
{
    public static function home()
    {
        return view('pages.index', ['page' => Page::find(1)]);
    }

    public static function about()
    {
        return view('pages.about', ['page' => Page::find(2)]);
    }

    public static function contacts()
    {
        return view('pages.contacts', ['page' => Page::find(3)]);
    }

    public static function allFeedback()
    {
        return view('pages.all-feedback', ['page' => Page::find(4)]);
    }

    public static function stock()
    {
        return view('pages.stock', ['page' => Page::find(5)]);
    }

    public static function specialOffers()
    {
        return view('pages.special-offers', ['page' => Page::find(6)]);
    }

    public static function service()
    {
        $categories = ArticleCategory::all()->where('id', "<>", "11");

        return view('pages.service', ['page' => Page::find(7), 'categories' => $categories]);
    }

    public static function electrician()
    {
        $page = Page::find(10);
        $page->incrementViewsCount();

        return view('pages.electrician', ['page' => Page::find(10)]);
    }

    public static function authors()
    {
        $authors = Author::all()->where('published', '=', 1);

        return view('pages.authors', ['page' => Page::find(18), 'authors' => $authors]);
    }

    public static function author($slug)
    {
        $author = Author::firstWhere('slug', '=',  $slug);

        if (!$author) {
            return response()->view('errors.404', status: 404);
        }

        return view('pages.author', ['author' => $author]);
    }

    public static function articles()
    {
        return view('pages.articles', [
            'page' => Page::find(20),
            'articles' => Article::all()->where('category_id', '=', 11)->where('publicated', '=', 1)
        ]);
    }

    public static function price()
    {
        return view('pages.price', ['page' => Page::find(21)]);
    }

    public static function portfolio()
    {
        return view('pages.portfolio', [
            'page' => Page::find(22),
            'portfolios' => Portfolio::all()->where("published", '=', '1')
        ]);
    }

    public static function politica()
    {
        return view('pages.politica', ['page' => Page::find(23)]);
    }

    public static function sitemap()
    {
        $pages = Page::all()->map(function ($item) {
            $item->unique_id = "page_" . $item->id;
            return $item;
        });

        $articles = Article::all()->where('publicated', '=', 1)->map(function ($item) {
            $item->unique_id = "article_" . $item->id;
            return $item;
        });

        $combined = new Collection();
        $combined = $combined->merge($pages)
            ->merge($articles);

        $sorted = $combined->sortByDesc('updated_at');

        return response()
            ->view('pages.sitemap', ['pages' => $sorted])
            ->header("Content-Type", "application/xml; charset=utf-8");
    }

    public function getPolicy() {
        return view('pages.politica');
    }
}
