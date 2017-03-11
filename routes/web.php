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

Route::get('/', function () {
    return view('layouts.main');
});

Route::get('category','categorycontroller@category');
Route::get('/product/create/{id}','productcontroller@create');
Route::post('category','categorycontroller@store');
Route::post('/product/store','productcontroller@store');
Route::get('/products','productcontroller@view');
