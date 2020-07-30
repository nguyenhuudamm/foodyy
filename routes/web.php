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
		Route::get('/', 'category_system@index')->name('admin.category');
		Route::resource('category_system','category_system');
		//thêm
		//sửa
		//xóa
		
	});
	// quản lí danh mục con
	Route::group(['prefix' => 'category_child'], function(){
		//danh sach
		Route::get('/', 'category_child@index')->name('admin.category_child');
		//them
		Route::get('add','HomeController@myform');
		Route::post('add','HomeController@myformPost');
		//sua
		//xoa
	});

	// quản lí danh mục quán ăn
	Route::group(['prefix' => 'category_shop'], function(){
		// danh sach
		Route::get('/', 'category_shop@index')->name('admin.category_shop');
		//thêm
		//sửa
		//xóa
		
	});

	// quản lí món ăn
	Route::group(['prefix' => 'foods'], function(){
		// danh sach
		Route::get('/', 'category_shop@foods')->name('admin.foods');
		//thêm
		//sửa
		//xóa
		
	});
});


// đừng dụng phía  dưới này nha  [Nhóm]
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
	//TEST
	Route::get('test', function(){
		$shop = DB::table('shop')->first();
		echo $shop->id;
	});

});


