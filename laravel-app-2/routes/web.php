<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Middleware\AgeCheck;
use App\Http\Middleware\CountryCheck;

Route::get('/', function () {
    return view('welcome');
});
// creating named route ->name
Route::view('home/profile/user','home')->name('hm');
// dynamic parameter
Route::view('home/username/{name}','home')->name('user');



// to redirect the specific endpoint using HomeController function
Route::get('show',[HomeController::class,'show']);
Route::get('user',[HomeController::class,'user']);


// Route group with prefix
Route::prefix('student')->group(function(){
    Route::view('/home1','home1');

    Route::get('/showstudent',[HomeController::class,'showstudent']);
    Route::get('/add',[HomeController::class,'add']);

});

Route::prefix('teacher')->group(function(){
    Route::view('/home1','home1');

    Route::get('/showstudent',[HomeController::class,'showstudent']);
    Route::get('/add',[HomeController::class,'add']);

});


//Route group with controller
Route::controller(StudentController::class)->group(function(){
    Route::get('showroutegroup','showroutegroup');
    Route::get('add','add');
    Route::get('delete','delete');
    Route::get('about/{name}','about');

});

//Middleware
Route::view('homemiddleware','homemiddleware');


//Single Middleware
Route::view('home2','home2')->middleware('check1');
//Middleware Group
Route::middleware('check1')->group(function(){

    Route::view('about2','about2');
    Route::view('list','about2');
    Route::view('contact','about2');
    Route::view('user','about2');
});


//Middleware to routes
Route::view('home3','home3')->middleware([AgeCheck::class,CountryCheck::class]);
Route::view('about3','about3')->middleware([AgeCheck::class,CountryCheck::class]);
