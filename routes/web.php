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


Route::get('', 'HomeController@index');
Route::get('/introductie', 'HomeController@introductie');
Route::get('/motivatie', 'HomeController@motivatie');
Route::get('/beroepsbeeld', 'HomeController@beroepsbeeld');



Route::get('/articles', 'ArticlesController@index');
Route::post('/articles', 'ArticlesController@store');
Route::get('/articles/create', 'ArticlesController@create');
Route::get('/articles/{article}', 'ArticlesController@show');
Route::get('/articles/{article}/edit', 'ArticlesController@edit');
Route::put('/articles/{article}', 'ArticlesController@update' );



Route::get('/dashboard', 'CourseController@index' );
Route::get('/dashboard/create/course', 'CourseController@create');
Route::post('/dashboard', 'CourseController@store');
Route::get('/dashboard/{id}/edit/course', 'CourseController@edit' );
Route::put('/dashboard/{id}/edit/course', 'CourseController@update' );
Route::delete('/dashboard/{id}', 'CourseController@delete' );















