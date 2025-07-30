<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Page;
use App\Models\Service;
use App\Models\Portfolio;
use Illuminate\Support\Number;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    private function getCategoryId($category)
    {
        $categoryIdMap = [
            'extensions' => 1,
            'foundation' => 2,
            'construction' => 3,
            'reconstruction' => 4,
            'decoration' => 5,
            'warming' => 6,
            'roof' => 7,
            'heating' => 9,
            'water-system' => 10,
        ];

        return $categoryIdMap[$category];
    }

    private function showNewService($link, $category = '')
    {
        if ($category) {
            $newServicePage = Service::firstWhere('slug', '=', 'service/' . $category . '/' . $link);
            if (!$newServicePage) {
                return response()->view('errors.404', status: 404);
            }

            $portfolios;

            if ($newServicePage->portfolio) {
                $portfolio_ids = json_decode($newServicePage->portfolio);

                if (is_array($portfolio_ids) && count($portfolio_ids) > 0) {
                    $portfolios = Portfolio::whereIn('id', $portfolio_ids)
                        ->get(['card'])
                        ->toArray();
                }
            }

            $newServicePage->timestamps = false;
            $newServicePage->incrementViewsCount();
            $newServicePage->timestamps = true;

            return view('pages.new-service-page', [
                'page' => $newServicePage,
                'portfolios' => isset($portfolios) ? $portfolios : null,
            ]);
        } else {
            $newServicePage = Service::firstWhere('slug', '=', 'service/' . $link);
            if (!$newServicePage) {
                return response()->view('errors.404', status: 404);
            }

            $portfolios;

            if ($newServicePage->portfolio) {
                $portfolio_ids = json_decode($newServicePage->portfolio);

                if (is_array($portfolio_ids) && count($portfolio_ids) > 0) {
                    $portfolios = Portfolio::whereIn('id', $portfolio_ids)
                        ->get(['card'])
                        ->toArray();
                }
            }

            $newServicePage->timestamps = false;
            $newServicePage->incrementViewsCount();
            $newServicePage->timestamps = true;

            return view('pages.new-service-page', [
                'page' => $newServicePage,
                'portfolios' => isset($portfolios) ? $portfolios : null,
            ]);
        }
    }

    public function getView($link)
    {
        $categoryPage = Page::firstWhere('link', '=', 'service/' . $link . '/');

        if ($categoryPage) {
            $category_id = $this->getCategoryId($link);

            $old_services = Article::where('category_id', $category_id)
                ->get()
                ->map(function ($article) {
                    $views = $article->views;
                    $formatedViews = Number::withLocale('ru', function () use ($views) {
                        return Number::abbreviate($views);
                    });

                    return [
                        'id' => $article->id,
                        'slug' => $article->link,
                        'image_preview' => $article->image,
                        'short_title' => $article->short_title,
                        'created_at' => $article->created_at,
                        'updated_at' => $article->updated_at,
                        'views' => $formatedViews,
                        'preview_text' => Str::limit(strip_tags($article->text), 100),
                        'is_published' => $article->publicated,
                        'new_design' => $article->new_design,
                    ];
                });

            $new_services = Service::where('category_id', $category_id)
                ->get()
                ->map(function ($service) {
                  $views = $service->views;
                    $formatedViews = Number::withLocale('ru', function () use ($views) {
                        return Number::abbreviate($views);
                    });

                    return [
                        'id' => $service->id,
                        'slug' => $service->slug,
                        'image_preview' => $service->image_preview,
                        'short_title' => $service->short_title,
                        'created_at' => $service->created_at,
                        'updated_at' => $service->updated_at,
                        'views' => $formatedViews,
                        'preview_text' => Str::limit(strip_tags($service->text_preview), 100),
                        'is_published' => $service->is_published,
                        'new_design' => true,
                    ];
                });

            $all_services = collect($old_services)->merge($new_services)->unique('slug');

            return view('pages.categories', [
                'page' => $categoryPage,
                'all' => $all_services,
                'new_services' => Service::all(),
            ]);
        }

        $servicePage = Article::firstWhere('link', '=', 'service/' . $link);

        if ($servicePage) {
            if ($servicePage->new_design) {
                return $this->showNewService($link);
            }

            $servicePage->timestamps = false;
            $servicePage->incrementViewsCount();
            $servicePage->timestamps = true;

            return view('pages.service-page', ['page' => $servicePage]);
        }

        return $this->showNewService($link);
    }

    public function getViewSecond($category, $service)
    {
        $page = Article::firstWhere('link', '=', 'service/' . $category . '/' . $service);

        if ($page) {
            if ($page->new_design) {
                return $this->showNewService($service, $category);
            }

            $page->timestamps = false;
            $page->incrementViewsCount();
            $page->timestamps = true;

            return view('pages.service-page', ['page' => $page]);
        }

        return $this->showNewService($service, $category);
    }
}
