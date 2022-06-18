<?php

use Illuminate\Support\Facades\Route;
use App\Models\Item;
use App\Models\Coleta;
use App\Models\Entidade;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ColetaController;
use App\Http\Controllers\EntidadeController;

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

Route::resource('/entidades', EntidadeController::class)->middleware('auth');;
Route::resource('/coletas', ColetaController::class)->middleware('auth');;
Route::resource('/itens', ItemController::class)->middleware('auth');

Route::get('/geral', function () {
    return view('geral');
})->name('geral');

Route::middleware('auth')->group(function () {
    Route::get('/administrativa', function () {
        return view('administrativa');
    })->name('administrativa');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
