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
    return view('principal');
})->name('principal');

Route::resource('/projetos', ProjetoController::class);



// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/cadastro', function () {
//     return view('cadastro');
// });

// Route::get('/lista', function () {
//     $projetos = Projeto::all();

//     return view('lista', [ 'dados' => $projetos ]);
// });

// Route::get('/lista/{$id}', function ($id) {
    
//     $projeto = Projeto::findOrFail($id);

//     if( $projeto == null){
//         return 'ID inválido';
//     }

//     return view('projetos', [ 'dados' => $projeto]);
// });
