<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

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

// Home route
Route::get('/', function () { return view('home'); })->name('home');

// Resource route for projects
Route::get('projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('projects/create', [ProjectController::class, 'create'])->name('projects.create');
Route::post('projects', [ProjectController::class, 'store'])->name('projects.store');

// {project} es el objeto completo project y ya no el id, esto para buscar en la url por cualquier otro campo que no sea el id. En este caso se busca por título de proyecto para hacer más amigable la lectura en la url (route model binding)
Route::get('project/{project}', [ProjectController::class, 'show'])->name('projects.show');




Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

