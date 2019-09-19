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
    return view('sites.home');
});
 Route::get('/about', 'SiteController@about');
 Route::get('/download', 'SiteController@download');

 Route::get('/login', 'AuthController@login');

 Route::get('/dashboard', 'DashboardController@index');

Route::get('/banner', 'BannerController@index');

Route::get('/lookbook', 'LookbookController@index');