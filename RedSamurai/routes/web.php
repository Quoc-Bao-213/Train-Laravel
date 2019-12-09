<?php

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

Route::get('/', 'SanPhamController@index')->name('trang-chu');
Route::get('/{id}', 'SanPhamController@show')->name('ds-san-pham');

// Route::prefix('/')->group(function (){
//     Route::name('index.')->group(function (){
//         Route::get('/', 'SanPhamController@show')->name('trang-chu');
//     });
// });
