<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Translation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class SetLocaleMiddleware
{

    public function handle(Request $request, Closure $next): Response
    {
        $locale = $request->segment(1);

        if (in_array($locale, ['en', 'ru', 'uk'])) {
            App::setLocale($locale);
        } else {
        }

        $translations = Translation::with('page')
        ->get()
        ->reduce(function ($carry, $item) use ($locale) {
            $slug = $item->page->slug;
            $carry[$slug][$item->field] = $item->{"text_{$locale}"};
            return $carry;
        }, []);

        View::share('translations', $translations);

        return $next($request);
    }
}
