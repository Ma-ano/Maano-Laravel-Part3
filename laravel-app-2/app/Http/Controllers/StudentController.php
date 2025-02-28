<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Route group with controller
    function showroutegroup(){
        return "List of Students";
    }
    function add(){
        return "List Added";
    }
    function delete(){
        return "List Deleted";
    }
    function about($name){
        return $name;
    }

}
