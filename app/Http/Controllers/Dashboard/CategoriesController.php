<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\ArticleCategory;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CategoriesController extends Controller
{
    public function showIndex()
    {
        $categories = ArticleCategory::orderByDesc('created_at')->get();

        return view('dashboard.categories.index', ['categories' => $categories]);
    }

    public function newCategory()
    {
        return view('dashboard.categories.new');
    }

    public function editCategory($id)
    {
        $category = ArticleCategory::findOrFail($id);

        return view('dashboard.categories.edit', ["category" => $category]);
    }

    public function createCategory(Request $request)
    {
        $fields = $request->validate([
            'title' => ['required', 'max:255'],
            'h1' => ['max:255'],
            'link' => ['required', 'max:255', Rule::unique('article_categories')->ignore($request->id)],
            'thumbnail' => ['max:255'],
            'text' => []
        ]);

        if (!$fields['h1']) {
            $fields['h1'] = "";
        }

        $created = ArticleCategory::create($fields);

        if ($created) {
            return redirect('/dashboard/categories/' . $created->id)->with('status', 'Категория успешно создана!');
        }

        return back()->with('status', 'Ошибка!');
    }

    public function updateCategory(Request $request)
    {
        $fields = $request->validate([
            'title' => ['required', 'max:255'],
            'h1' => ['max:255'],
            'link' => ['required', 'max:255', Rule::unique('article_categories')->ignore($request->id)],
            'thumbnail' => ['max:255'],
            'text' => []
        ]);

        if (!$fields['h1']) {
            $fields['h1'] = "";
        }

        $category = ArticleCategory::find($request->id);

        if (!$category) {
            return redirect('/dashboard/categories')->with('status', 'Категории не существует!');
        }

        foreach ($fields as $key => $value) {
            $category[$key] = $value;
        }

        $category->save();

        return back()->with('status', 'Категория успешно обновлена!');
    }

    public function deleteCategory(Request $request)
    {
        $category = ArticleCategory::findOrFail($request->id);

        if ($category->delete()) {
            return redirect('/dashboard/categories')->with('status', 'Категория успешно удалена!');
        }

        return back()->with('status', 'Ошибка при удалении категории!');
    }
}
