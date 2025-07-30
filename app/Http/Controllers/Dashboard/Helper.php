<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Redirect;

class Helper {
    public static function validateUrl($url) {
        $url = trim($url, '/');
        $url = parse_url($url, PHP_URL_PATH);
        $url = trim($url, '/');
        $url = preg_replace('/\/+/', '/', $url);
        return $url;
    }

    public static function makeRedirect($from, $to) {
        if($from === $to) {
          return;
        }
  
        Redirect::updateOrCreate(
          ['from' => "/$from"],
          ['to' => "/$to"]
        );
    }
}