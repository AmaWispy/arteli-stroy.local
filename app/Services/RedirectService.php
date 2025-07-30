<?php

namespace App\Services;

use App\Models\Redirect;
use Illuminate\Support\Facades\Cache;

class RedirectService
{
  public static function getRedirects()
  {
    return Cache::rememberForever('redirects.all', function () {
      return Redirect::all();
    });
  }

  public static function clearCache()
  {
    Cache::forget('redirects.all');
  }
}
