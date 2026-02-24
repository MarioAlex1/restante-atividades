<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\SobreNosController;
use Illuminate\Support\Facades\Route;

// Rota principal
Route::get('/', [PrincipalController::class, 'index'])->name('principal');

// Rota Sobre Nós
Route::get('/sobrenos', [SobreNosController::class, 'index'])->name('sobrenos');

// Rota contato
Route::get('/contato', [ContatoController::class, 'index'])->name('contato');

// Rota login
Route::get('/login', [LoginController::class, 'index'])->name('login');


// Rotas agrupadas
Route::prefix('app')->group(function() {
    // Rota clientes
    Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes');
    // Rota fornecedor
    Route::get('/fornecedores/{nome}/{status}/{categoria}', [FornecedorController::class, 'index'])->name('fornecedor');
    // Rota produtos
    Route::get('/produtos/{nome?}/{preco?}', [ProdutoController::class, 'index'])->name('produtos');
});