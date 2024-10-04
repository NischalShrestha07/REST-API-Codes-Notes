<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgeCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // echo 'ecjp from age check';
        // echo '<pre>'; ///preformatted text


        // print_r($request->age);   returns the age passed through path


        // print_r($request);
        // echo 'You cannot visit the site';


        // die()  used to terminate script execution.
        // if ($request->age < 12) {
        //     die('You cannot visit the page');
        // }
        // echo "Age Check";

        //Group of middleware
        // Path:  http://127.0.0.1:8000/gohome?country=nepal&age=67
        if ($request->age <= 18) {
            die('You are under 18 and cannot access this website');
        }
        return $next($request);
    }
}

//three types of middleware

// -> GLOBAL MIDDLEWARE(SINGLE MDLWE)
// -> GROUP MIDDLEWARE(MULTIPLE MDLWE)
// -> ROUTE MIDDLEWARE(SINGLE & MULTIPLE MDLWE)

// ->Route mdlwe doesnt needed to add middleware inside bootstrap/app.php rather add into the web.php


