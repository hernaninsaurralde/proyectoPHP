<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\ProductController;
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


Route::get('/', HomeController::class)->name('home');


// Rutas producto

Route::get('productos', [ProductController::class, 'index']);

Route::get('productos/{producto}',  [ProductController::class, 'show']);

// Rutas contacto

Route::get('contacto', [ContactoController::class, 'index'])->name('contacto.index');

Route::post('contacto', [ContactoController::class, 'enviar'])->name('contacto.enviar');

// Nosotros

Route::get('nosotros', [NosotrosController::class, 'index']);
