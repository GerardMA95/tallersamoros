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
})->name('main');

/*
|--------------------------------------------------------------------------
| Items Routes
|--------------------------------------------------------------------------
*/

Route::get('/busqueda/{patent?}/{category?}', 'Entity\Category\CategoryController@list')->name('itemSearch');

Route::get('/busqueda/{patent}/{category}/listado', 'Entity\Item\ItemController@list')->name('itemList');

Route::get('/outlet', 'Entity\Item\ItemController@outlet')->name('itemOutlet');

Route::get('/busqueda/{patent}/{category}/listado/{itemId}','Entity\Item\ItemController@description')->name('itemDescription');

/*
|--------------------------------------------------------------------------
| Contact Routes
|--------------------------------------------------------------------------
*/
Route::get('/contacto', function () {
    return view('modules.contact.contactMap');
})->name('contactMap');

Route::post('/contacto/correo','Entity\Email\EmailController@send')->name('persistEmail');

Route::get('/contacto/presupuesto/{itemShortName}','Entity\Email\EmailController@send')->name('persistBudget');
