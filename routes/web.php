<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\TelefonoController;
use App\Http\Controllers\CorreoController;

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

Route::resource('/usuario','App\Http\Controllers\UsuarioController');

Route::resource('/correo','App\Http\Controllers\CorreoController');

Route::resource('/telefono','App\Http\Controllers\TelefonoController');

Route::get('/correo/{id}',[CorreoController::class,'show']);
Route::get('/correo/create/{id}/{id2}',[CorreoController::class,'create']);

Route::get('/telefono/{id}',[Telefonoontroller::class,'show']);
Route::get('/telefono/create/{id}/{id2}',[TelefonoController::class,'create']);

Route::get('/correo/edit',[CorreoController::class,'edit']);

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
