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
        //middleware 1
        // if($request->age<18){
        //     die('you cannot access this website');
        // }


        //middleware group 2
        // if($request->age<18){
        //     die('You are under 18 and you cannot access this website');
        // }


        //middleware to routes
        if($request->age<18){
            die('you are under aged');
        }
        return $next($request);

    }
}
