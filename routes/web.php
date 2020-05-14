<?php

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

// Mostrar a index
Route::get('/', 'PaginasController@index');
// Mostrar o checkout
Route::get('/checkout', 'PaginasController@checkout');
// Mostrar a store
Route::get('/produtos', 'PaginasController@store');
// Mostrar o produto
Route::get('/produto/{id}', 'PaginasController@show');
