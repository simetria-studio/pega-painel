<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Apps\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\MarkController;
use App\Http\Controllers\Apps\ResenhaController;
use App\Http\Controllers\Admin\AnimaisController;
use App\Http\Controllers\Admin\PessoasController;
use App\Http\Controllers\Apps\HomeController as App;
use App\Http\Controllers\Admin\Auth\AdAuthController;
use App\Http\Controllers\Apps\AnimaisController as AppAnimais;

Auth::routes();



Route::post('admin/login', [AdAuthController::class, 'login'])->name('admin.login.post');

Route::middleware(['auth:admin'])->group(function () {
    Route::get('/painel', [HomeController::class, 'index'])->name('home');
    route::get('comunicacao', [DashboardController::class, 'comunicacao'])->name('comunicacao');
    route::get('cadastrar', [DashboardController::class, 'cadastrar'])->name('cadastrar');
    route::get('ecommerce', [DashboardController::class, 'ecommerce'])->name('ecommerce');
    route::get('usuario', [PessoasController::class, 'index'])->name('usuario');

    route::prefix('owners')->group(function () {
        route::get('user-animais/{id}', [PessoasController::class, 'animais'])->name('user.animais');
        route::get('dados-pessoais/{id}', [PessoasController::class, 'show'])->name('dados.pessoais');
        route::post('filtro', [PessoasController::class, 'filtro'])->name('filtro');
        route::get('edit/{id}', [PessoasController::class, 'edit'])->name('owner.edit');
        route::put('update/{id}', [PessoasController::class, 'update'])->name('owner.update');
    });

   
    route::prefix('painel/animais')->group(function () {
        route::get('animais', [DashboardController::class, 'animais'])->name('animais');
        route::get('consultar-animais', [AnimaisController::class, 'animais'])->name('consultar.animais');
        route::get('informacoes/{id}', [AnimaisController::class, 'show'])->name('informacoes.animal');
        route::get('cadastrar', [DashboardController::class, 'cadastrarAnimal'])->name('cadastrar-animal');
    });

    Route::prefix('marks')->group(function () {
        Route::get('index', [MarkController::class, 'index'])->name('mark.index');
        Route::get('create', [MarkController::class, 'create'])->name('mark.create');
        Route::post('store', [MarkController::class, 'store'])->name('mark.store');
        Route::get('edit/{id}', [MarkController::class, 'edit'])->name('mark.edit');
        Route::put('update/{id}', [MarkController::class, 'update'])->name('mark.update');
        Route::delete('destroy/{id}', [MarkController::class, 'destroy'])->name('mark.destroy');
    });

    route::get('anuncio', [DashboardController::class, 'anuncio'])->name('anuncio');
    route::get('permissoes', [DashboardController::class, 'permissoes'])->name('permissoes');
    route::get('painel/financeiro', [DashboardController::class, 'financeiro'])->name('financeiro');
    route::get('painel/configuracoes', [DashboardController::class, 'configuracoes'])->name('configuracoes');

    route::any('logout-admin', [AdAuthController::class, 'logout'])->name('admin.logout');
});

Route::middleware(['auth:web'])->group(function () {
    Route::get('/app/index', [App::class, 'index'])->name('app.index');

    Route::get('chose-owner', [ResenhaController::class, 'choseOwner'])->name('chose.owner');
    Route::get('chose-animal', [ResenhaController::class, 'choseAnimal'])->name('chose.animal');
    Route::get('resenha-step-1', [ResenhaController::class, 'step1'])->name('resenha.step1');
    Route::get('resenha-step-2', [ResenhaController::class, 'step2'])->name('resenha.step2');
    Route::get('resenha-step-3', [ResenhaController::class, 'step3'])->name('resenha.step3');
    Route::get('resenha-step-4', [ResenhaController::class, 'step4'])->name('resenha.step4');
    Route::get('resenha-step-5', [ResenhaController::class, 'step5'])->name('resenha.step5');

    Route::get('pessoas', [App::class, 'pessoas'])->name('app.pessoas');
    Route::get('arbitros', [App::class, 'arbitros'])->name('app.arbitros');
    Route::get('criadores',  [App::class, 'criadores'])->name('app.criadores');
    Route::get('meu-perfil', [App::class, 'meuPerfil'])->name('app.meuPerfil');
    Route::get('parceiros', [App::class, 'parceiros'])->name('app.parceiros');
    Route::get('veterinarios', [App::class, 'veterinarios'])->name('app.veterinarios');
    Route::get('zootecnicos', [App::class, 'zootecnicos'])->name('app.zootecnicos');
    Route::get('tecnicos', [App::class, 'tecnicos'])->name('app.tecnicos');

    Route::get('animais', [App::class, 'animais'])->name('app.animais');
    Route::get('meus-animais', [AppAnimais::class, 'meusAnimais'])->name('app.meusAnimais');

    Route::get('financeiro', [App::class, 'financeiro'])->name('app.financeiro');
    Route::get('comunicacoes', [App::class, 'comunicacoes'])->name('app.comunicacoes');
    Route::get('configuracoes', [App::class, 'configuracoes'])->name('app.configuracoes');
});

Route::get('app/login', [AuthController::class, 'loginPage'])->name('app.login');
Route::post('app/login/post', [AuthController::class, 'login'])->name('app.login.post');
Route::get('app/logout', [AuthController::class, 'logout'])->name('app.logout');

Route::get('app/register', [AuthController::class, 'registerPage'])->name('app.register');

Route::get('app-warning', [App::class, 'warning'])->name('app.warning');