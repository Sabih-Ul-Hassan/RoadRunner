<?php

use Illuminate\Support\Facades\Route;

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
    return view('landingPage');
});


Route::get('/signup', 'App\Http\Controllers\UserController@showSignupPage');
Route::post('/signup', 'App\Http\Controllers\UserController@registerNewUser');
Route::get('/login', 'App\Http\Controllers\UserController@showLoginPage');
Route::post('/login', 'App\Http\Controllers\UserController@loggedUser');
Route::get('/profile', 'App\Http\Controllers\UserController@showProfilePage');
Route::get('/editProfile', 'App\Http\Controllers\UserController@showEditProfile');

Route::get('/items', 'App\Http\Controllers\ProductsController@showItems');
Route::get('/viewItemsPage', 'App\Http\Controllers\ProductsController@showViewProducts');
Route::get('/cart', 'App\Http\Controllers\ProductsController@showCart');

Route::get('/addProduct', 'App\Http\Controllers\ProductsController@showAddProducts');
Route::post('/addProduct', 'App\Http\Controllers\ProductsController@AddNewProducts');

Route::get('/editProduct', 'App\Http\Controllers\ProductsController@showEditProducts');
Route::get('/items/{id}', 'App\Http\Controllers\ProductsController@showProduct');

Route::get('/adminSearch', 'App\Http\Controllers\AdminController@showAdminSearchPage');

Route::get('/about', 'App\Http\Controllers\GeneralController@showAbout');