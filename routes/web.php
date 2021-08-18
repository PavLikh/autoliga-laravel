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

Route::get('/', function () {
    return view('home');
});

Route::get('/catalog', function () {
    return view('catalog');
})->name('catalog');

Route::get('stores', function () {
    return view('stores');
})->name('stores');

Route::get('/catalog/family', 'App\Http\Controllers\ContactController@catalogFamily')->name('catalog-family');

Route::get('/catalog/business', 'App\Http\Controllers\ContactController@catalogBusiness')->name('catalog-business');
