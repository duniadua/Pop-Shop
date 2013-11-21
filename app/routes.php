<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */

Route::get('/', function() {
            return View::make('hello');
        });

Route::get('desktop', function() {

            return View::make('asset.index')
                            ->nest('bootstrap', 'asset.config_common')
                            ->nest('menus', 'asset.menus');
        });


Route::resource('users', 'UserController');
Route::resource('customer', 'CustomerController');
Route::resource('bank', 'BankController');
Route::resource('status', 'StatusController');
Route::resource('type', 'TypeController');
Route::resource('store', 'StoreController');
Route::resource('brand', 'BrandController');
Route::resource('product_type', 'ProductTypeController');
Route::resource('courier', 'CourierController');
Route::resource('category', 'CategoryController');
Route::resource('product', 'ProductController');
Route::resource('login', 'LoginController');
Route::post('login/cekLogin','LoginController@cekLogin');