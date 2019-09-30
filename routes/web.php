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
 Route::get('/inbox','SiteController@inbox');
 Route::get('/post','SiteController@post');
 Route::get('/ubahpost/{id}','SiteController@ubahpost');

 Route::get('/login', 'AuthController@login');
 Route::get('/loginAdmin', 'AuthController@loginAdmin');
 Route::get('/register', 'AuthController@register');
 Route::get('/logout','AuthController@logout');

 Route::get('/dashboard', 'DashboardController@index');

Route::get('/banner', 'BannerController@index');
Route::get('/ubahbanner/{id}','BannerController@ubahbanner');

Route::get('/lookbook', 'LookbookController@index');
Route::get('/ubahlookbook/{id}','LookbookController@ubahlookbook');

Route::get('/pomade','ShoppingController@pomade');
Route::get('/ubahpomade/{id}','ShoppingController@ubahpomade');
Route::get('/spray','ShoppingController@spray');
Route::get('/ubahspray/{id}','ShoppingController@ubahspray');
Route::get('/haircare','ShoppingController@haircare');
Route::get('/ubahhaircare/{id}','ShoppingController@ubahhaircare');
Route::get('/bodycare','ShoppingController@bodycare');
Route::get('/ubahbodycare/{id}','ShoppingController@ubahbodycare');