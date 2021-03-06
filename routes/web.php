<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Http\Request;
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
Route::get('/', [
    'as'=>'home',
    'uses'=>'PageController@GetIndex'
]);
Route::get('index', [
    'as'=>'index',
    'uses'=>'PageController@GetIndex'
]);
Route::get('product-type/{id}', [
    'as'=>'product-type',
    'uses'=>'PageController@ProductType'
]);
Route::get('product-details/{id}', [
    'as'=>'product-details',
    'uses'=>'PageController@ProductDetails'
]);
Route::get('add-cart/{id}', [
    'as'=>'add-cart',
    'uses'=>'PageController@AddCart'
]);
Route::get('del-cart/{id}', [
    'as'=>'del-cart',
    'uses'=>'PageController@DelCart'
]);
Route::get('list-cart/', [
    'as'=>'list-cart',
    'uses'=>'PageController@ListCart'
]);
Route::get('del-list-cart/{id}', [
    'as'=>'del-list-cart',
    'uses'=>'PageController@DelListCart'
]);
Route::get('update-list-cart/{id}/{qty}', [
    'as'=>'update-list-cart',
    'uses'=>'PageController@UpdateListCart'
]);
Route::get('price/{price}', [
    'as'=>'get-product-by-price',
    'uses'=>'PageController@getProductbyPrice'
]);
Route::get('feature/{feature}', [
    'as'=>'get-product-by-feature',
    'uses'=>'PageController@getProductbyFeature'
]);
Route::post('update-all-cart', [
    'as'=>'update-all-cart',
    'uses'=>'PageController@UpdateAllCart'
]);
Route::get('checkout', [
    'as'=>'checkout',
    'uses'=>'PageController@getcheckout'
]);
Route::post('checkout', [
    'as'=>'checkout',
    'uses'=>'PageController@postcheckout'
]);
Route::get('login_customer', [
    'as'=>'login',
    'uses'=>'PageController@getlogin_customer'
]);
Route::post('login_customer', [
    'as'=>'login_customer',
    'uses'=>'PageController@postlogin'
]);
Route::get('signup', [
    'as'=>'signup',
    'uses'=>'PageController@getsignup'
]);
Route::post('signup', [
    'as'=>'signup',
    'uses'=>'PageController@postsignup'
]);
Route::get('signout', [
    'as'=>'signout',
    'uses'=>'PageController@signout'
]);
Route::get('about', [
    'as'=>'about',
    'uses'=>'PageController@about'
]);
Route::get('contact', [
    'as'=>'contact',
    'uses'=>'PageController@contact'
]);
Route::get('product-search', [
    'as'=>'product-search',
    'uses'=>'PageController@searchbyname'
]);
Route::get('search/name', [
    'as'=>'searchbyproductname',
    'uses'=>'PageController@searchbyproductname'
]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
