<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function show(){
        return to_route('hm');
    }
    // pass params in named route
    function user(){
        return to_route('user',['name'=>'peter']);
    }


    //route group with prefix
    function showstudent(){
        return "show student list";
    }
    function add(){
        return "add new student";
    }

}
