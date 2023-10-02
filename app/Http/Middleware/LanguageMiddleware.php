<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LanguageMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // app/Http/Middleware/LanguageMiddleware.php

    // public function handle($request, Closure $next){
    //     $lang = $request->segment(1); 
        
    //     if ($lang === 'en') {
    //         app()->setLocale($lang);
    //     } else {
    //         app()->setLocale('tr'); 
    //     }

    //     return $next($request);
    // }


}
