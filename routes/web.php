<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return 'ciao a tutti';
    $saluto = "Hello Laravel";
    return view('home', compact("saluto"));
});

Route::get('/about', function () {
    $name = "Roberto Del Prete";
    return view('about', compact("name"));
});

