<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstadoController;
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

use App\Models\Estado;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('principal');
})->name('principal');

Route::resource('/estados', EstadoController::class);


// Route::get('/ola', function(){
//     return 'Olá, mundo!';
// });

// Route::get('/estados/todos', function(){
//     $estados =  Estado::all();

//     return view('lista', [ 'dados' => $estados]);

// });

// Route::get('/estados/{id}', function($id){
//     //$estado = Estado::find ($id);
//     $estado = Estado::findOrFail ($id);

//     if ($estado == null){
//         return 'ID inválido';
//     }

//     return view ('lista', ['dados' => $estado]);
// });