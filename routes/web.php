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

Route::get('/', 'indexController@index')->name('index');
Route::get('/about', 'indexController@about')->name('about');
Route::get('/contact', 'indexController@contact')->name('contact');
Route::post('/submitdata','indexController@contactsubmit');
Route::post('/submitdata02','indexController@contactsubmit02');


Route::get('/commingsoon','ServiceController@commingsoon');
Route::get('/faq','ServiceController@faq');
Route::get('/error404','ServiceController@error404');
Route::get('/blog','ServiceController@blog');
Route::get('/userregister','HomeController@userregister');

Route::get('/products', 'ProductsController@products')->name('products');
Route::get('/productsdetails', 'ProductsController@productsdetails')->name('productsdetails');
Route::get('/cart', 'ProductsController@cart')->name('cart');
Route::get('/checkout', 'ProductsController@checkout')->name('checkout');
Route::get('/singleblog', 'ProductsController@singleblog')->name('singleblog');
Route::get('/myaccount', 'ProductsController@myaccount')->name('myaccount');

Route::get('/approvedmembers', 'UserController@approvedmembers')->name('approvedmembers');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/admin/add-category', 'AjaxController@store');
Route::get('/allpost', 'UserController@');


Route::get('/adpost', 'ProductsController@adpost');
Route::post('/post_store', 'ProductsController@post_store');




Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::post('/admin/store', 'AdminController@store');
Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
Route::get('/store', 'AjaxController@store');
