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
    return view('home');
});

Route::get('contactame ', function () {
    return "Sección de Contactos";
})->name('contactos');

Route::get('home', function () {
    echo "<a href='" . route('contactos') . "'>Contacto 1</a><br>";
});