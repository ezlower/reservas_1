<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ReservaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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


Route::resource('users', UserController::class)->names('users');

Route::middleware(['auth:sanctum', 'verified'])->get('/dash', function () {
    return view('dash.index');
})->name('dash');
Route::get('reservas/pdf', [App\Http\Controllers\ReservaController::class, 'pdf'])->name('reservas.pdf');
Route::resource('clientes', ClienteController::class)->middleware('auth');
Route::resource('rooms', RoomController::class)->middleware('auth');
Route::resource('reservas', ReservaController::class)->middleware('auth');
Route::resource('pagos', PagoController::class)->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
