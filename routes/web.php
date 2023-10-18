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

Route::get('/', [App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.principal');
Route::get('/contato', [App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');
Route::get('/sobrenos', [App\Http\Controllers\SobreNosController::class, 'sobreNos'])->name('site.sobrenos');

Route::prefix('/app')->group(function(){
    Route::get('/login', function(){return 'Login';})->name('app.login');
    Route::get('/fornecedores', function(){return 'Fornecedores';})->name('app.fornecedores');
    Route::get('/clientes', function(){return 'Clientes';})->name('app.clientes');
    Route::get('/produtos', function(){return 'Produtos';})->name('app.produtos');
});

Route::prefix('/teste')->group(function(){
    Route::get('/rota1', function(){echo 'Rota1';})->name('site.rota1');
    Route::get('/rota2',function(){
        return redirect()->route('site.rota1');
    }); 

});

Route::fallback(function(){
    echo "A pagina acessada não existe dentro do sistema, <a href='".route('site.principal')."'> clique aqui </a> para voltar para a pagina inicial";
});


