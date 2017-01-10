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

Route::get('/', 'ArticleController@index');
Route::get('/index', 'ArticleController@index');
Route::get('/art/{article_id?}', 'ArticleController@articledetail');
Route::get('/artlist/{atsort_id?}', 'ArticleController@articlelist');

Auth::routes();

Route::get('/home', 'HomeController@index');
