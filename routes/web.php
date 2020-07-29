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

Route::get('admin', function () {
    return view('admin.index');
});
// nguyen huu dam

Route::group(['prefix' => 'admin'], function(){
	// quản lí danh mục cha
	Route::group(['prefix' => 'category'], function(){
		Route::get('list_category', function(){
			return view('admin.index');
		});
		// adsfdfdsfdfsd
	});
	// quản lí danh mục con
	Route::group(['prefix' => 'category_child'], function(){
		Route::get('admin1', function(){
			return "heelo";
			//nguyen huu dam
		});
	});
});


