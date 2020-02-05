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

Route::get('posts/{slug}', 'GradesController@show');

Route::get('/', 'HomeController@index');
Route::get('/de-persoonlijke-introductiepagina', 'HomeController@dePersoonlijkeIntroductiepagina');
Route::get('/persoonlijk-dashboard', 'HomeController@persoonlijkDashboard');
Route::get('/motivatie', 'HomeController@motivatie');
Route::get('/beroepsbeeld', 'HomeController@beroepsbeeld');
Route::get('/grades', 'HomeController@grades');






