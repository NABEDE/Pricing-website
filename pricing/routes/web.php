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

Route::get('/wel', function () {
    return view('welcome');
});

Route::get('/other', function () {
    return view('liste-product');
});

Route::get('/', 'productController@printProduct');

Route::get('/buying/{id}', 'HomeController@FindProduct');

Route::post('/sendCheck/{id}', 'productController@sendOrder');

Auth::routes();

Route::get('/home/{id}', 'HomeController@index');

Route::get('/home', 'HomeController@indexSh');

Route::get('home/stop/{id}', 'productController@stopOrder');

Route::get('stop/{id}', 'productController@stopOrder');

Route::get('home/start/{id}', 'productController@startOrder');

Route::get('start/{id}', 'productController@startOrder');








Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
