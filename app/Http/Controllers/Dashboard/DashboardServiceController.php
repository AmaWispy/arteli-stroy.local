<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Service;
use App\Models\ArticleCategory;
use App\Models\Author;
use Illuminate\Http\Request;
use App\Http\Controllers\Dashboard\Helper;
use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Validation\Rule;

class DashboardServiceController extends Controller
{
  private function normalizePrices($prices)
  {
    foreach ($prices as $idx => $firstLevelItems) {
      if ($idx == 0) {
        continue;
      }

      if (isset($prices[$idx]["list"])) {
        $prices[$idx]["list"] = array_values($firstLevelItems["list"]);
      }

      if (isset($prices[$idx]["list-notactive"])) {
        $prices[$idx]["list-notactive"] = array_values($firstLevelItems["list-notactive"]);
      }
    }

    return $prices;
  }

  private function normalizeTable($table)
  {
    if (isset($table[2])) {
      foreach ($table[2] as $idx => $category) {
        $table[2][$idx] = array_values($category);
      }
      $table[2] = array_values($table[2]);
    }

    return $table;
  }

  private function normalizeList($faq)
  {
    return array_values($faq);;
  }

  public function services()
  {
    $services = Service::orderByDesc('created_at')
      ->get();

    return view('dashboard.service-page.index', ['services' => $services]);
  }

  public function newServicePage()
  {
    $categories = ArticleCategory::all();
    $authors = Author::all();
    $cards = Portfolio::whereNotNull('card')
      ->get(['id', 'title'])
      ->toArray();

    return view(
      'dashboard.service-page.new',
      [
        'categories' => $categories,
        'authors' => $authors,
        'cards' => $cards
      ]
    );
  }

  public function servicePageEdit($id)
  {
    $service = Service::findOrFail($id);
    $categories = ArticleCategory::all();
    $authors = Author::all();
    $cards = Portfolio::whereNotNull('card')
      ->get(['id', 'title'])
      ->toArray();

    return view(
      'dashboard.service-page.edit',
      [
        'service' => $service,
        'categories' => $categories,
        'authors' => $authors,
        'cards' => $cards
      ]
    );
  }

  public function createService(Request $request)
  {
    // dd($request);
    $request->merge(([
      'slug' => Helper::validateUrl($request->slug)
    ]));

    // main data validation
    $fields = $request->validate([
      'h1' => ['required', 'max:255'],
      'title' => ['required', 'max:255'],
      'description' => ['required'],
      'short_title' => ['required', 'max:255'],
      'image' => ['required', 'max:255'],
      'image_preview' => ['required', 'max:255'],
      'text_title' => ['required', 'max:255'],
      'text' => ['required'],
      'slug' => ['required', 'max:255', 'unique:services'],
      'category_id' => ['required'],
      'author_id' => ['required'],
      'text_preview' => []
    ]);

    // flags
    $fields['is_indexed'] = $request->is_indexed === 'on' ? true : false;
    $fields['is_published'] = $request->is_published === 'on' ? true : false;

    // prices
    $fields['prices'] = json_encode($this->normalizePrices($request['prices']));

    // table 
    $fields['price_table'] = json_encode($this->normalizeTable($request->table));

    // faq
    if (!$request->faq) {
      $fields['faq'] = $request->faq;
    } else {
      $fields['faq'] = json_encode($this->normalizeList($request->faq));
    }

    // tiles
    if ($request->tiles) {
      $tiles = json_encode($request->tiles);

      $fields['tiles'] = $tiles;
    }

    // dd($fields);
    $created = Service::create($fields);

    return redirect('/dashboard/services/' . $created->id)->with('status', 'Статья успешно создана!');
  }

  public function updateService(Request $request)
  {
    $request->merge(([
      'slug' => Helper::validateUrl($request->slug)
    ]));

    $fields = $request->validate([
      'h1' => ['required', 'max:255'],
      'title' => ['required', 'max:255'],
      'description' => ['required'],
      'short_title' => ['required', 'max:255'],
      'image_preview' => ['required', 'max:255'],
      'image' => ['required', 'max:255'],
      'text_title' => ['required', 'max:255'],
      'text' => ['required'],
      'slug' => [
        'required',
        'max:255',
        Rule::unique('services')->ignore($request->id)
      ],
      'category_id' => ['required'],
      'author_id' => ['required'],
      'text_preview' => []
    ]);

    $fields['is_indexed'] = $request->is_indexed === 'on' ? true : false;
    $fields['is_published'] = $request->is_published === 'on' ? true : false;

    $service = Service::find($request->id);

    if (!$service) {
      return redirect('/dashboard/services')->with('status', 'Статьи не существует!');
    }

    foreach ($fields as $key => $value) {
      $service[$key] = $value;
    }

    if ($service->isDirty('category_id')) {
      $segments = explode('/', $service->slug);
      $url = end($segments);

      if ($service->category_id == 11) {
        $service->slug = "articles/$url";
      } else {
        $service->slug = "service/$url";
      }
    }

    $urlIsDirty = false;
    $originalUrl = $service->getOriginal('slug');
    if ($service->isDirty('slug')) {
      $urlIsDirty = true;
    }

    $service->prices = json_encode($this->normalizePrices($request['prices']));;

    $normalizedTable = $this->normalizeTable($request->table);
    $service->price_table = json_encode($normalizedTable);

    if (!$request->faq) {
      $service->faq = $request->faq;
    } else {
      $service->faq = json_encode($this->normalizeList($request->faq));
    }

    if ($request->tiles) {
      $rawTiles = $request->tiles;
      $rawTiles['items'] = $this->normalizeList($rawTiles['items']);
      $tiles = json_encode($rawTiles);

      $service['tiles'] = $tiles;
    } else {
      $service['tiles'] = null;
    }

    if ($request->cards) {
      $service['portfolio'] = json_encode($request->cards);
    } else {
      $service['portfolio'] = $request->cards;
    }

    if ($service->save()) {
      if ($urlIsDirty) {
        Helper::makeRedirect($originalUrl, $service->slug);
      }
    }

    return back()->with('status', 'Статья успешно обновлена!');
  }

  public function deleteService(Request $request)
  {
    $service = Service::findOrFail($request->id);

    Helper::makeRedirect($service->slug, $service->category->slug);

    if ($service->delete()) {
      return redirect('/dashboard/services')->with('status', 'Статья успешно удалена!');
    }

    return back()->with('status', 'Ошибка при удалении статьи!');
  }
}
