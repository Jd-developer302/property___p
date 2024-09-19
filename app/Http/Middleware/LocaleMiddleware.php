<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class LocaleMiddleware
{
    public function handle($request, Closure $next)
    {
        // Retrieve locale from the session, fallback to default locale if not set
        $locale = session('locale', config('app.locale'));
        App::setLocale($locale); // Set the locale for the request

        return $next($request);
    }
}
