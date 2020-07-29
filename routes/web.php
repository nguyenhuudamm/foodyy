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




//admin
Route::group(['prefix' => 'admin'], function(){
	// quản lí danh mục cha
	Route::group(['prefix' => 'category'], function(){
		// danh sach
		Route::get('list_category', 'category_system@index');
		//thêm
		//sửa
		//xóa
		
	});
	// quản lí danh mục con
	Route::group(['prefix' => 'category_child'], function(){
		//danh sach
		//them
		//sua
		//xoa
	});
});

// shop
Route::group(['prefix' => 'shop'], function(){
	// quản lí danh mục cha
	Route::group(['prefix' => 'category'], function(){
		// danh sach
		Route::get('list_category', 'category_shop@index');
		//thêm
		//sửa
		//xóa
		
	});
	// quản lí danh mục con
	Route::group(['prefix' => 'food'], function(){
		//danh sach
		//them
		//sua
		//xoa
	});
});


