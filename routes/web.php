<?php

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ProdutoDetalheController;
use App\Http\Middleware\LogAcessoMiddleware;
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

Route::prefix('contato')->group(function(){
    Route::get('/', [App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');
    Route::post('/store', [App\Http\Controllers\ContatoController::class, 'store'])->name('site.store');
});

Route::get('/', [App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobrenos', [App\Http\Controllers\SobreNosController::class, 'sobreNos'])->name('site.sobrenos');

Route::get('/login', [\App\Http\Controllers\LoginController::class, 'index'])->name('site.login');
Route::post('/login', [\App\Http\Controllers\LoginController::class, 'autenticar'])->name('site.login');


Route::middleware('autenticacao')->prefix('fornecedores')->group(function(){
    Route::get('/', [\App\Http\Controllers\FornecedorController::class, 'index'])->name('fornecedores.index');
    Route::post('/show', [\App\Http\Controllers\FornecedorController::class, 'show'])->name('fornecedores.show');
    Route::get('/show', [\App\Http\Controllers\FornecedorController::class, 'show'])->name('fornecedores.show');
    Route::get('/create', [\App\Http\Controllers\FornecedorController::class, 'create'])->name('fornecedores.create');
    Route::post('/store', [\App\Http\Controllers\FornecedorController::class, 'store'])->name('fornecedores.store');
    Route::get('/edit/{id}', [\App\Http\Controllers\FornecedorController::class, 'edit'])->name('fornecedores.edit');
    Route::post('/update', [\App\Http\Controllers\FornecedorController::class, 'update'])->name('fornecedores.update');
    Route::get('/delete/{id}', [\App\Http\Controllers\FornecedorController::class, 'delete'])->name('fornecedores.delete');
});

Route::resource('produtos', ProdutoController::class);

Route::resource('produtos-detalhe', ProdutoDetalheController::class);

Route::middleware('autenticacao')->prefix('app')->group(function(){ 
    Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('app.home');
    Route::get('/logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('app.logout');
    Route::get('/clientes', [\App\Http\Controllers\ClienteController::class, 'index'])->name('app.clientes');
   

});


Route::get('/teste/{valor1}/{valor2}', [App\Http\Controllers\TesteController::class, 'teste'])->name('teste');



Route::fallback(function(){
    echo "A pagina acessada não existe dentro do sistema, <a href='".route('site.index')."'> clique aqui </a> para voltar para a pagina inicial";
});


