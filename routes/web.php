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
    return view('welcome');
});

Route::get('elastic', function() {

	dd("Bienvenido a la API");

});

Route::get('elastic/documents/reindex/{user_id}', 'ElasticController@reindex')->name('elastic.documents.reindex');

Route::get('elastic/documents/search/{user_id}/{query}', 'ElasticController@search')->name('elastic.documents.search');
