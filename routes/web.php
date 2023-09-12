<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstablecimientoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\QrController;

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

Route::resource('establecimientos', EstablecimientoController::class)->middleware('auth')->except(['show']);
Route::resource('categorias', CategoriaController::class)->middleware('auth')->except(['show']);
Route::resource('menus', MenuController::class)->middleware('auth')->except(['show']);


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/qr', [App\Http\Controllers\QrController::class, 'generateQR'])->name('qr');