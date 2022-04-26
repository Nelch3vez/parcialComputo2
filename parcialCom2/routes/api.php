<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//listar registros
Route::get('tienda', 'App\Http\Controllers\TiendaController@index');


//obtener un registro
Route::get('tienda/{id}', 'App\Http\Controllers\TiendaController@show');


//nuevo registro
Route::post('tienda', 'App\Http\Controllers\TiendaController@store');


//editar registro
Route::put('tienda', 'App\Http\Controllers\TiendaController@store');


//eliminar registro
Route::delete('tienda/{id}', 'App\Http\Controllers\TiendaController@destroy');

