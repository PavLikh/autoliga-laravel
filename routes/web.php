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

// Route::get('/', function () {
    // return view('home');
// });

Route::get('/', 'App\Http\Controllers\CatalogController@productLine')->name('home');

Route::get('/promotion', function () {
    return view('promotion');
})->name('promotion');

Route::get('structuredb', function () {
    return view('structureDB');
})->name('structureDB');


Route::get('/catalog', 'App\Http\Controllers\CatalogController@allCatalog')->name('all-catalog');
Route::get('/catalog/{purposeId}', 'App\Http\Controllers\CatalogController@catalogByPurpose')->name('catalog-purpose');
Route::get('/catalog/family/{featureId}', 'App\Http\Controllers\CatalogController@catalogByFeature')->name('catalog-feature');
Route::get('/catalog/business/{featureId}', 'App\Http\Controllers\CatalogController@catalogByFeature')->name('catalog-feature');
Route::get('/detail/{vehicleId}', 'App\Http\Controllers\DetailController@showOneVehicle')->name('one-vehicle');
Route::get('/stores', 'App\Http\Controllers\StoreController@allStores')->name('all-stores');
Route::get('/stores/{storeId}', 'App\Http\Controllers\StoreController@showOneStore')->name('one-store');
