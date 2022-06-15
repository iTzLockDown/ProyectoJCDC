<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//
Route::resource('modulo', App\Http\Controllers\ModuloController::class);
Route::resource('menu', App\Http\Controllers\MenuController::class);
Route::resource('perfil', App\Http\Controllers\PerfilController::class);
//Menus CRUD
Route::get('/vmodulo', [App\Http\Controllers\PrincipalController::class, 'VistaModulo'])->name('principal.modulo');
Route::get('/vmenu', [App\Http\Controllers\PrincipalController::class, 'VistaMenu'])->name('principal.menu');
Route::get('/vperfil', [App\Http\Controllers\PrincipalController::class, 'VistaPerfil'])->name('principal.perfil');

