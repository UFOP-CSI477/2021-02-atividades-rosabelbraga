<?php

use Illuminate\Support\Facades\Route;
use App\Models\Projeto;
use App\Http\Controllers\ProjetoController;

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
    return view('indice');
})->name('indice');

Route::resource('/projetos', ProjetoController::class);/*->middleware('auth');*/

Route::get('/sobre', function () {
    return view('about');
})->name('about');

Route::get('/home', function () {
    return view('home');
})->name('home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
