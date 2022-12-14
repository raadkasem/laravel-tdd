<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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

Route::post('/books', 'App\Http\Controllers\BooksController@store');
Route::patch('/books/{book}', 'App\Http\Controllers\BooksController@update');
Route::delete('/books/{book}', 'App\Http\Controllers\BooksController@destroy');

Route::post('/author', 'App\Http\Controllers\AuthorController@store');