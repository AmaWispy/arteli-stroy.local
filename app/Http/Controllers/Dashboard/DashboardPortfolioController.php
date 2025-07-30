<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use App\Models\Author;
use Illuminate\Http\Request;
use App\Http\Controllers\Dashboard\Helper;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;

class DashboardPortfolioController extends Controller {
    public function index() {
        $portfolios = Portfolio::orderByDesc('created_at')
            ->get();

        return view('dashboard.portfolio.index', ['portfolios' => $portfolios]);
    }

    public function portfolioNew() {
        $categories = PortfolioCategory::all();
        $authors = Author::all();

        return view('dashboard.portfolio.portfolio-new', ['authors' => $authors, 'categories' => $categories]);
    }

    public function portfolioEdit($id) {
        $portfolio = Portfolio::findOrFail($id);
        $categories = PortfolioCategory::all();
        $authors = Author::all();

        return view('dashboard.portfolio.portfolio-edit', ['portfolio' => $portfolio, 'authors' => $authors, 'categories' => $categories]);
    }

    public function createPortfolio(Request $request) {
        $request->merge(([
            'link' => Helper::validateUrl($request->link)
        ]));

        $fields = $request->validate([
            'h1' => ['required', 'max:255'],
            'title' => ['required', 'max:255'],
            'description' => ['required'],
            'short_title' => ['required', 'max:255'],
            'thumbnail' => ['required', 'max:255'],
            'img_big' => ['required', 'max:191'],
            'content' => ['required'],
            'link' => ['required', 'max:255', 'unique:portfolios'],
            'category_id' => ['required'],
            'author_id' => ['required']
        ]);

        $fields['indexed'] = $request->indexed === 'on' ? true : false;
        $fields['published'] = $request->published === 'on' ? true : false;

        $fields['card'] = json_encode($request->card);

        $created = Portfolio::create($fields);

        return redirect('/dashboard/portfolio/' . $created->id)->with('status', 'Статья успешно создана!');
    }

    public function updatePortfolio(Request $request) {
        $request->merge(([
            'link' => Helper::validateUrl($request->link)
        ]));

        $fields = $request->validate([
            'h1' => ['required', 'max:255'],
            'title' => ['required', 'max:255'],
            'description' => ['required'],
            'short_title' => ['required', 'max:255'],
            'thumbnail' => ['required', 'max:255'],
            'img_big' => ['required', 'max:191'],
            'content' => ['required'],
            'link' => [
            'required',
            'max:255',
            Rule::unique('portfolios')->ignore($request->id)
            ],
            'category_id' => ['required'],
            'author_id' => ['required']
        ]);

        $fields['indexed'] = $request->indexed === 'on' ? true : false;
        $fields['published'] = $request->published === 'on' ? true : false;

        $portfolio = Portfolio::find($request->id);

        if(!$portfolio) {
            return redirect('/dashboard/portfolio')->with('status', 'Статьи не существует!');
        }

        foreach($fields as $key => $value) {
            $portfolio[$key] = $value;
        }

        if($portfolio->isDirty('link')) {
            Helper::makeRedirect($portfolio->getOriginal('link'), $portfolio->link);
        }

        $portfolio->card = json_encode($request->card);

        $portfolio->save();

        return back()->with('status', 'Статья успешно обновлена!');
    }

    public function deletePortfolio(Request $request) {
        $portfolio = Portfolio::findOrFail($request->id);

        Helper::makeRedirect($portfolio->link, 'portfolio');

        if($portfolio->delete()) {
            return redirect('/dashboard/portfolio')->with('status', 'Статья успешно удалена!');
        }

        return back()->with('status', 'Ошибка при удалении статьи!');
    }
}