<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\PrincipalController::class, 'principal']);
Route::get('/contato', [App\Http\Controllers\ContatoController::class, 'contato']);
Route::get('/sobrenos', [App\Http\Controllers\SobreNosController::class, 'sobreNos']);

Route::prefix('/app')->group(function(){
    Route::get('/login', function(){return 'Login';});
    Route::get('/fornecedores', function(){return 'Fornecedores';});
    Route::get('/clientes', function(){return 'Clientes';});
    Route::get('/produtos', function(){return 'Produtos';});
});


