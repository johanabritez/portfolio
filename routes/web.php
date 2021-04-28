<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;

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
Route::resource('projects', ProjectController::class);

// {project} es el objeto completo project y ya no el id, esto para buscar en la url por cualquier otro campo que no sea el id. En este caso se busca por título de proyecto para hacer más amigable la lectura en la url (route model binding) EJEMPLO DE LA RUTA SHOW
// Route::get('project/{project}', [ProjectController::class, 'show'])->name('projects.show');

// Route for the About view
Route::get('about', function () { return view('about'); })->name('about');

// Route for the Contact view
Route::get('contact/create', [ContactController::class, 'create'])->name('contact');
Route::post('contact', [ContactController::class, 'store'])->name('storeContact');


