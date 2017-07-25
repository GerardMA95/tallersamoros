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
    return view('main');
})->name('index');

Route::get('/articulos/{category}/{itemShortName?}/{itemId?}', function ($category, $itemShortName = 'Test', $itemId = '10') {
    return view('item.item', ['category' => $category, 'itemShortName' => $itemShortName, 'itemId' => $itemId]);
})->name('item');

/*
|--------------------------------------------------------------------------
| Contact Routes
|--------------------------------------------------------------------------
*/
Route::get('/contactar', function () {
    return view('contact.contactUs');
})->name('contactUs');

Route::get('/contactar/{category}/{itemShortName?}/{itemId?}', function () {
    return view('contact.itemRequest');
})->name('itemRequest');
