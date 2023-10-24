<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\PuntoController;
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
    echo "ඞmongas";
});



// Route::get('api/users',  'App\Http\Controllers\UserController@index');

//USERS
Route::get('api/users', [UserController::class, 'index']);
Route::post('api/users', [UserController::class, 'store']);
Route::get('api/users/{user}', [UserController::class, 'show']);
Route::put('api/users/{user}', [UserController::class, 'update']);
Route::delete('api/users/{user}', [UserController::class, 'destroy']);

//PUNTOS
Route::get('api/puntos', [PuntoController::class, 'index']);
Route::post('api/puntos', [PuntoController::class, 'store']);
Route::get('api/puntos/{punto}', [PuntoController::class, 'show']);
Route::put('api/puntos/{punto}', [PuntoController::class, 'update']);
Route::delete('api/punto/{punto}', [PuntoController::class, 'destroy']);