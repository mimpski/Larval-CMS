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


Route::get('/', ['as' => 'home', 'uses' => 'PagesController@homepage']);

Route::get('/about', ['as' => 'about', 'uses' => 'PagesController@about']);
Route::get('/contact', ['as' => 'about', 'uses' => 'PagesController@contact']);

Route::get('/editor', ['as' => 'editor', 'uses' => 'CMSController@editor']);
Route::post('/editor/save', ['as' => 'save', 'uses' => 'CMSController@save']);
