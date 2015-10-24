<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'ProductController@index');
Route::get('/create', 'ProductController@create');
Route::post('/', 'ProductController@store');
Route::get('/{product}/edit', ['as' => 'product.edit', 'uses' => 'ProductController@edit']);
Route::put('/{product}', ['as' => 'product.update', 'uses' => 'ProductController@update']);
Route::delete('/{product}', ['as' => 'product.destroy', 'uses' => 'ProductController@destroy']);



