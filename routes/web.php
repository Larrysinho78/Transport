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

/* Route::get('/', function () {
    return view('welcome');
})->name('main'); */
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/* Rutas para Products */
Route::get('products/pdf/{product}', 'ProductController@imprimir')->name('products.imprimir');
Route::get('products', 'ProductController@index')->name('products.index');
Route::get('products/create', 'ProductController@create')->name('products.create');
Route::get('products/{product}', 'ProductController@show')->name('products.show');
Route::get('products/{product}/edit', 'ProductController@edit')->name('products.edit');
Route::post('products', 'ProductController@store')->name('products.store');
Route::match(['put', 'patch'], 'products/{product}', 'ProductController@update')->name('products.update');
Route::delete('products/{product}', 'ProductController@destroy')->name('products.destroy');

/* Ruta que ha registrado todas las operaciones para el login */
Auth::routes();




