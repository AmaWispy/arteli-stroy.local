<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;

class PortfolioController extends Controller
{
    public function getView($link) {
        $page = Portfolio::firstWhere('link', '=' , 'portfolio/' . $link);

        if(!$page) {
            return response()->view('errors.404', status: 404);
        }

        return view('pages.portfolio-page', ['page' => $page]);
    }
}
