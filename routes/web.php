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
})->name('home');

Route::get('/chi_siamo', function () {
    $lista = ['Del Prete Roberto', 'Dragan Savic', 'Antonio Acierno', 'Alessandro Saba', 'Antonio Sabella', 'Martina Gangemi', 'Marco Belloni', 'Alessandro Boccardi', 'e tanti altri...'];
    return view('chi_siamo', compact("lista"));
})->name('chi_siamo');

Route::get('/info', function () {
    $immagine = "https://picsum.photos/1200/600";
    return view('info', compact("immagine"));
})->name('info');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

