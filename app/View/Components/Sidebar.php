<?php

namespace App\View\Components;

use App\Models\Article;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\ArticleCategory;

class Sidebar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sidebar', [
            'categories' => ArticleCategory::all(),
            'topThreeArticles' => Article::orderBy('views', 'desc')->limit(3)->get()
        ]);
    }
}
