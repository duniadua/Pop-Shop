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

Route::get('controlpanel', function() {

            return View::make('home.index')
                            ->nest('header', 'asset.header_cp')
                            ->nest('bootstrap', 'asset.html_config_common')
                            ->nest('footer', 'asset.footer');
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