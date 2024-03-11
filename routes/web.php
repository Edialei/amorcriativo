<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PedidoController;
use Illuminate\Support\Facades\Route;

Route::get('/cadastro', [UserController::class, 'create'])->name('cadastro.create');
Route::post('/cadastro', [UserController::class, 'store'])->name('cadastro.store');

Route::get('/login', [LoginController::class, 'create'])->name('login.create');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::get('/destroy/{id}', [LoginController::class, 'destroy'])->name('login.destroy');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
});

Route::get('/pedido/create', [PedidoController::class, 'create'])->name('pedido.create');
Route::post('/pedido/store', [PedidoController::class, 'store'])->name('pedido.store');

Route::get('/pedidos/filter', [DashboardController::class, 'filterPedidos'])->name('pedidos.filter');

Route::get('/pedido/imprimir/{id}', [PedidoController::class, 'imprimirPedido'])->name('pedido.imprimir');

