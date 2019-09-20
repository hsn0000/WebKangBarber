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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('sites.home');
});
 Route::get('/about', 'SiteController@about');
 Route::get('/download', 'SiteController@download');

 Route::get('/login', 'AuthController@login');
 Route::get('/loginAdmin', 'AuthController@loginAdmin');
 Route::get('/register', 'AuthController@register');
 Route::get('/logout','AuthController@logout');

 Route::get('/dashboard', 'DashboardController@index');

Route::get('/banner', 'BannerController@index');

Route::get('/lookbook', 'LookbookController@index');