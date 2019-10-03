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
 Route::get('/postmodel','SiteController@postmodel');
 Route::get('/ubahpostmodel/{id}','SiteController@ubahpostmodel');


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

Route::get('/bogor','SalonController@bogor');
Route::get('/daftkaryawan/AKDLBvEHoyjRmrPAQONq','SalonController@husinbarber');
Route::get('/daftkaryawan/0N1OCqVh6YJ2hB5Ke97h','SalonController@salphibarber');
Route::get('/daftkaryawan/RLYleSwQ2RhH5Pcxnj2w','SalonController@juithabarber');
Route::get('/daftkaryawan/UWxToOJkMlQ3bbfcjIsb','SalonController@haerilbarber');

Route::get('/jakarta','SalonController@jakarta');
Route::get('/daftkaryawan/47rcum3HkQ4huQtRiDeZ','SalonController@intratraining');
Route::get('/daftkaryawan/0N1OCqVh6YJ2hB5Ke97h','SalonController@kodehunter');


Route::get('/tangerang','SalonController@tangerang');
Route::get('/daftkaryawan/mTjImu3I5HHf63vVduYk','SalonController@nusapersada');

Route::get('/bekasi','SalonController@bekasi');
Route::get('/daftkaryawan/oGyedjeBkQ3eo2Kl0SbY','SalonController@barberbox');

Route::get('/perhatian','SalonController@perhatian');