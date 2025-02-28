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
        //middleware group 2
        // echo "Country Check";
        // if($request->country!='philippines'){
        //     die('this website cannot access outside philippines');
        // }


        //middleware to routes
        if($request->country!='philippines'){
            die('you cannot access this website outside philippines');
        }

        return $next($request);
    }
}
