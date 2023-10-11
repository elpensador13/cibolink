<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstablecimientoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\MenuController;

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




Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('establecimientos', EstablecimientoController::class)->middleware('auth')->except(['show']);
Route::resource('categorias', CategoriaController::class)->middleware('auth')->except(['show']);
Route::resource('menus', MenuController::class)->middleware('auth')->except(['show']); 

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); 