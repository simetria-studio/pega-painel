<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Apps\AuthController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\AdAuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('admin/store', [AdAuthController::class, 'store'])->name('admin.store.post');
Route::post('auth/login', [LoginController::class, 'login'])->name('login.post');

Route::post('register/store', [UserController::class, 'store'])->name('register.post');

Route::post('app/register/post', [AuthController::class, 'register'])->name('app.register.post');