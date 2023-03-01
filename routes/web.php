<?php

use App\Http\Controllers\Admin\AnimaisController;
use App\Http\Controllers\Admin\PessoasController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::middleware(['auth'])->prefix('dashboard')->group(function () {


    route::get('comunicacao', [DashboardController::class, 'comunicacao'])->name('comunicacao');
    route::get('cadastrar', [DashboardController::class, 'cadastrar'])->name('cadastrar');
    route::get('ecommerce', [DashboardController::class, 'ecommerce'])->name('ecommerce');
    route::get('usuario', [PessoasController::class, 'index'])->name('usuario');

    route::prefix('usuario')->group(function () {
        route::get('user-animais/{id}', [PessoasController::class, 'animais'])->name('user.animais');
        route::get('dados-pessoais/{id}', [PessoasController::class, 'show'])->name('dados.pessoais');
    });

    route::get('animais', [DashboardController::class, 'animais'])->name('animais');
    route::prefix('animais')->group(function () {
        route::get('consultar-animais', [AnimaisController::class, 'animais'])->name('consultar.animais');
        route::get('informacoes', [DashboardController::class, 'informacoesAnimal'])->name('informacoes-animal');
        route::get('cadastrar', [DashboardController::class, 'cadastrarAnimal'])->name('cadastrar-animal');
    });

    route::get('anuncio', [DashboardController::class, 'anuncio'])->name('anuncio');
    route::get('permissoes', [DashboardController::class, 'permissoes'])->name('permissoes');
    route::get('financeiro', [DashboardController::class, 'financeiro'])->name('financeiro');
    route::get('configuracoes', [DashboardController::class, 'configuracoes'])->name('configuracoes');
});
