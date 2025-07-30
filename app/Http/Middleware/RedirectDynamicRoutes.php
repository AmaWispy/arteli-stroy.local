<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Services\RedirectService;

class RedirectDynamicRoutes
{
  /**
   * Handle an incoming request.
   *
   * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
   */
  public function handle(Request $request, Closure $next): Response
  {
    $redirects = RedirectService::getRedirects();
    $redirect = $redirects->firstWhere('from', "/" . $request->path());

    if ($redirect) {
      return redirect($redirect->to, 301);
    }

    return $next($request);
  }
}
