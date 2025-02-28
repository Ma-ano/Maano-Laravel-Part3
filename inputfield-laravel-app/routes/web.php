<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('user-form','user-form');
Route::post('addUser',[UserController::class,'addUser']);

Route::view('home','home');
Route::view('user','home');

Route::view('about','about');
Route::view('about/{name}','about');
