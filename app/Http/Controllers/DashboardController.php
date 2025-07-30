<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Author;
use App\Models\Redirect;
use App\Models\Page;
use Illuminate\Validation\Rule;

class DashboardController extends Controller
{
    private function makeRedirect($from, $to) {
      if($from === $to) {
        return;
      }

      Redirect::updateOrCreate(
        ['from' => "/$from"],
        ['to' => "/$to"]
      );
    }

    private function validateUrl($url) {
      $url = trim($url, '/');
      $url = parse_url($url, PHP_URL_PATH);
      $url = trim($url, '/');
      $url = preg_replace('/\/+/', '/', $url);
      return $url;
    }

    public function index() {
      $articles = Article::where('category_id', '<>', 11)
        ->orderByDesc('created_at')
        ->get();

      return view('dashboard.index', ['articles' => $articles]);
    }

    public function dashboardNew() {
      $categories = ArticleCategory::all();
      $authors = Author::all();

      return view('dashboard.new', ['categories' => $categories, 'authors' => $authors]);
    }

    public function dashboardEdit($id) {
      $article = Article::findOrFail($id);
      $categories = ArticleCategory::all();
      $authors = Author::all();

      if($article->category_id === 4) {
        return view('dashboard.edit', ['article' => $article, 'categories' => $categories, 'authors' => $authors]);
      }

      return view('dashboard.edit', ['article' => $article, 'categories' => $categories, 'authors' => $authors]);
    }

    public function dashboardArticles() {
      $articles = Article::where('category_id', '=', 11)
        ->orderByDesc('created_at')
        ->get();

      return view('dashboard.index', ['articles' => $articles]);
    }

    public function dashboardPages() {
      $pages = Page::orderByDesc('created_at')
        ->get();

      return view('dashboard.pages', ['pages' => $pages]);
    }

    public function dashboardPagesEdit($id) {
      $page = Page::findOrFail($id);

      return view('dashboard.pages-edit', ['page' => $page]);
    }

    public function dashboardRedirects() {
      $redirects = Redirect::orderByDesc('created_at')
        ->get();

      return view('dashboard.redirects', ['redirects' => $redirects]);
    }

    public function dashboardRedirectsNew() {
      return view('dashboard.redirects-new');
    }

    public function dashboardRedirectsEdit($id) {
      $redirect = Redirect::findOrFail($id);

      return view('dashboard.redirects-edit', ['redirect' => $redirect]);
    }

    public function createArticle(Request $request) {
      $request->merge(([
        'link' => $this->validateUrl($request->link)
      ]));

      $fields = $request->validate([
        'h1' => ['required', 'max:255'],
        'title' => ['required', 'max:255'],
        'description' => ['required'],
        'short_title' => ['required', 'max:255'],
        'image' => ['required', 'max:255'],
        'img_big' => ['required', 'max:255'],
        'content' => ['required'],
        'link' => ['required', 'max:255', 'unique:articles'],
        'category_id' => ['required'],
        'author_id' => ['required'],
        'text' => []
      ]);

      $fields['indexing'] = $request->indexing === 'on' ? true : false;
      $fields['publicated'] = $request->publicated === 'on' ? true : false;

      $created = Article::create($fields);

      return redirect('/dashboard/' . $created->id)->with('status', 'Статья успешно создана!');
    }

    public function updateArticle(Request $request) {
      $request->merge(([
        'link' => $this->validateUrl($request->link)
      ]));

      $fields = $request->validate([
        'h1' => ['required', 'max:255'],
        'title' => ['required', 'max:255'],
        'description' => ['required'],
        'short_title' => ['required', 'max:255'],
        'image' => ['required', 'max:255'],
        'img_big' => ['required', 'max:255'],
        'content' => ['required'],
        'link' => [
          'required',
          'max:255',
          Rule::unique('articles')->ignore($request->id)
        ],
        'category_id' => ['required'],
        'author_id' => ['required'],
        'text' => []
      ]);

      $fields['indexing'] = $request->indexing === 'on' ? true : false;
      $fields['publicated'] = $request->publicated === 'on' ? true : false;

      $article = Article::find($request->id);

      if(!$article) {
        return redirect('/dashboard')->with('status', 'Статьи не существует!');
      }

      foreach($fields as $key => $value) {
        $article[$key] = $value;
      }

      if($article->isDirty('category_id')) {
        $segments = explode('/', $article->link);
        $url = end($segments);

        if($article->category_id == 11) {
          $article->link = "articles/$url";
        } else {
          $article->link = "service/$url";
        }
      }

      $urlIsDirty = false;
      $originalUrl = $article->getOriginal('link');
      if($article->isDirty('link')) {
        $urlIsDirty = true;
      }

      if($article->save()) {
        if($urlIsDirty) {
          $this->makeRedirect($originalUrl, $article->link);
        }
      }

      return back()->with('status', 'Статья успешно обновлена!');
    }

    public function deleteArticle(Request $request) {
      $article = Article::findOrFail($request->id);

      $this->makeRedirect($article->link, $article->category->link);

      if($article->delete()) {
        return redirect('/dashboard')->with('status', 'Статья успешно удалена!');
      }

      return back()->with('status', 'Ошибка при удалении статьи!');
    }

    public function updatePage(Request $request) {
      $fields = $request->validate([
        'h1' => ['required', 'max:255'],
        'title' => ['required', 'max:255'],
        'description' => ['required'],
        'image' => ['max:255'],
      ]);

      $fields['indexing'] = $request->indexing === 'on' ? true : false;

      $page = Page::find($request->id);

      if(!$page) {
        return redirect()->with('status', 'Страница не существует!');
      }

      foreach($fields as $key => $value) {
        $page[$key] = $value;
      }

      $page->save();

      return back()->with('status', 'Страница успешно обновлена!');
    }

    public function createRedirect(Request $request) {
      $request->merge([
        'from' => '/' . $this->validateUrl($request->from),
        'to' => '/' . $this->validateUrl($request->to)
      ]);

      $fields = $request->validate([
        'from' => ['required', 'max:255', 'unique:redirects', 'doesnt_start_with:/dashboard,/vhod-v-panel'],
        'to' => ['required', 'different:from' ,'max:255', 'doesnt_start_with:/dashboard,/vhod-v-panel']
      ]);

      $created = Redirect::create($fields);

      return redirect('/dashboard/redirects/' . $created->id)->with('status', 'Перенаправление создано!');
    }

    public function updateRedirect(Request $request) {
      $request->merge([
        'from' => '/' . $this->validateUrl($request->from),
        'to' => '/' . $this->validateUrl($request->to)
      ]);

      $fields = $request->validate([
        'from' => [
          'required',
          'max:255',
          'doesnt_start_with:/dashboard,/vhod-v-panel',
          Rule::unique('redirects')->ignore($request->id)
        ],
        'to' => ['required', 'different:from', 'max:255', 'doesnt_start_with:/dashboard,/vhod-v-panel']
      ]);

      $redirect = Redirect::find($request->id);

      if(!$redirect) {
        return redirect('/dashboard/redirects')->with('Перенаправление не существует!');
      }

      foreach($fields as $key => $value) {
        $redirect[$key] = $value;
      }

      $redirect->save();

      return back()->with('status', 'Перенаправление обновлено!');
    }

    public function deleteRedirect(Request $request) {
      $redirect = Redirect::findOrFail($request->id);

      if($redirect->delete()) {
        return redirect('/dashboard/redirects')->with('status', 'Перенаправление успешно удалено!');
      }

      return back()->with('status', 'Ошибка при удалении перенаправления!');
    }
}
