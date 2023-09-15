<?php

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

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home ', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route:: resource('pc-escritorio', App\Http\Controllers\PcEscritorioController::class);
Route:: resource('impresoras', App\Http\Controllers\ImpresorasController::class);
Route:: resource('laptop_distrito', App\Http\Controllers\LaptopDistritoController::class);
Route:: resource('telefono_distritos', App\Http\Controllers\TelefonoDistritoController::class);
Route:: resource('escaner_distrito', App\Http\Controllers\EscanerDistritoController::class);
Route:: resource('unidad_fiscal', App\Http\Controllers\UnidadFiscalController::class);
Route:: resource('unidad-privada-fiscomisional', App\Http\Controllers\UnidadPrivadaFiscomisionalController::class);
Route:: resource('user', App\Http\Controllers\UserController::class);







