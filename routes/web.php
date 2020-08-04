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




//admin

Route::get('test', 'tabs@editTab');
Route::get('test2', function(){
	$shop = App\model_shop::find(1)->active_shops;
	foreach ($shop as $value) {
		echo $value->id;
	}
	
});
Route::group(['prefix' => 'admin'], function(){
	// quản lí danh mục cha
	Route::group(['prefix' => 'category'], function(){
		// danh sach
		Route::get('/', 'tabs@index')->name('admin.category');
		//Route::resource('category_system','category_system');
		//thêm
		Route::post('addTab', 'tabs@addTab')->name('tabs.addTab');
		//sửa
		Route::post('editTab', 'tabs@editTab')->name('tabs.editTab');
		// cập nhật
		Route::post('updateTab', 'tabs@updateTab')->name('tabs.updateTab');
		//xóa
		Route::post('deleteTab', 'tabs@deleteTab')->name('tabs.deleteTab');
		// sua trang thai
		Route::post('/', 'tabs@changStatus')->name('tabs.changStatus');
		
	});
	// quản lí danh mục con
	Route::group(['prefix' => 'category_child'], function(){
		//danh sach
		
		 Route::get('/', 'tab_child@index')->name('admin.category_child');
		//them
		// Route::get('add','HomeController@myform');
		// Route::post('add','HomeController@myformPost');
		//sua
		//xoa
	});

	// quản lí danh mục quán ăn
	// Route::group(['prefix' => 'category_shop'], function(){
	// 	danh sach
	// 	Route::get('/', 'menu_foods@index')->name('admin.category_shop');
	// 	thêm
	// 	Route::post('/add', 'category_shop@add_category')->name('admin.add_category');

	// 	//sửa
	// 	Route::get('/view-update/{id}', 'category_shop@index')->name('admin.view-update');
	// 	Route::put('/update', 'category_shop@add_category')->name('admin.add_category');
	// 	//xóa

	// 	Route::post('/', 'category_shop@delete_category')->name('admin.delete_category');
		
	// });


	// quản lí món ăn
	Route::group(['prefix' => 'foods'], function(){
		// danh sach
		Route::get('/', 'foods@foods')->name('admin.foods');
		//thêm
		Route::post('addFood', 'foods@addFood')->name('foods.addFood');
		//sửa
		Route::post('editFood', 'foods@editFood')->name('foods.editFood');
		//cập nhật
		Route::post('updateFood', 'foods@updateFood')->name('foods.updateFood');
		//xóa
		Route::post('deleteFood', 'foods@deleteFood')->name('foods.deleteFood');
		//test
		Route::get('test', 'foods@updateFood')->name('foods.test');
		Route::get('test2', 'foods@fetch_view_modal');
		// upload file
		Route::post('uploadFile', 'foods@uploadFile')->name('foods.uploadFile');
		
	});
});


// đừng dụng phía  dưới này nha  [Nhóm]
// shop
Route::group(['prefix' => 'shop'], function(){
	// quản lí danh mục cha
	Route::group(['prefix' => 'category'], function(){
		// danh sach
		// Route::get('list_category', 'category_shop@index');
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
		// $shop = DB::table('shop')->first();
		// echo $shop->id;
	});

});


?>