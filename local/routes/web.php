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



Route::get('/','websiteConroller@index')->name('index');
Route::get('/single-product/{id}','websiteConroller@single_product')->name('single_product');
Route::get('/single-post/{id}','websiteConroller@single_post')->name('single_post');
Route::post('/commmentparent','websiteConroller@commmentparent')->name('commmentparent');
Route::post('/commentchild','websiteConroller@commentchild')->name('commentchild');
Route::get('/checkout','websiteConroller@checkout')->name('checkout');
Route::post('/confirm','websiteConroller@confirm')->name('confirm');
Route::resource('/addtocart','frontend\cartController');
Route::get('/Thankyou','websiteConroller@Thankyou')->name('Thankyou');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');







/*-------------------------------------------------------------------------
                            BACKEND
--------------------------------------------------------------------------*/
Route::group(['middleware' => 'auth'],function(){

Route::get('/home','HomeController@index')->name('home');
Route::resource('/blog','blogController');

});
