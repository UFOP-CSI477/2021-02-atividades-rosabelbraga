<?php

use Illuminate\Support\Facades\Route;
use App\Models\Item;
use App\Models\Coleta;
use App\Models\Entidade;
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

Route::resource('/entidades', EntidadeController::class);
Route::resource('/coletas', ColetaController::class);
Route::resource('/itens', ItemController::class);

Route::get('/geral', function () {
    return view('geral');
})->name('geral');

Route::get('/administrativa', function () {
    return view('administrativa');
})->name('administrativa');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
