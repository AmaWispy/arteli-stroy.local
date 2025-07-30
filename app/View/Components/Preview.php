<?php

namespace App\View\Components;

use App\Models\Article;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Preview extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $categoryId)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('components.preview', [
            'featured' => Article::where('category_id', '=', $this->categoryId)->where('publicated', '=', 1)->inRandomOrder()->limit(3)->get()
        ]);
    }
}
