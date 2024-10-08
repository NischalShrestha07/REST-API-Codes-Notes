<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CountryCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        //check http://127.0.0.1:8000/gohome?country=nepal in browser
        if ($request->country != 'nepal') {
            die('You cannot access the website outside Nepal');
        }
        return $next($request);
    }
}
