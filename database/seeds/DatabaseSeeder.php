<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(category_shopSeeder::class);
        $this->call(category_child_systemSeeder::class);
       $this->call(shopSeeder::class);
       $this->call(categoryShopSeeder::class);
    }
}
// tạo Seeder cho bảng category_shop
class category_shopSeeder extends Seeder{

	public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('category_system')->insert([
        	['ten_danhmuc'=>'Đồ ăn', 'ten_dm_khongdau'=>'do-an'],
    		['ten_danhmuc'=>'Đặt bàn', 'ten_dm_khongdau'=>'dat-ban'],
    		['ten_danhmuc'=>'Rượu bia', 'ten_dm_khongdau'=>'ruou-bia'],
    		['ten_danhmuc'=>'Thực phẩm', 'ten_dm_khongdau'=>'thuc-pham'],
    		['ten_danhmuc'=>'Hoa', 'ten_dm_khongdau'=>'hoa'],
    		['ten_danhmuc'=>'Sản phẩm', 'ten_dm_khongdau'=>'san-pham']
        ]);
    }
}

// tạo Seeder cho bảng category_child_system
class category_child_systemSeeder extends Seeder{

	public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('category_child_system')->insert([
        	['id_category_system'=> 1, 'ten_danhmuc'=>'Đồ ăn', 'ten_dm_khongdau'=>'do-an'],
        	['id_category_system'=> 1, 'ten_danhmuc'=>'Đồ uống', 'ten_dm_khongdau'=>'do-uong'],
        	['id_category_system'=> 1, 'ten_danhmuc'=>'Đồ chay', 'ten_dm_khongdau'=>'do-chay'],
        	['id_category_system'=> 1, 'ten_danhmuc'=>'Bánh kem', 'ten_dm_khongdau'=>'banh-kem'],
        	['id_category_system'=> 1, 'ten_danhmuc'=>'Tráng miệng', 'ten_dm_khongdau'=>'trang-mieng'],
        	['id_category_system'=> 1, 'ten_danhmuc'=>'Vỉa hè', 'ten_dm_khongdau'=>'via-he'],
        	['id_category_system'=> 1, 'ten_danhmuc'=>'Pizza/Burger', 'ten_dm_khongdau'=>'pizza-burger'],
        	['id_category_system'=> 1, 'ten_danhmuc'=>'Món gà', 'ten_dm_khongdau'=>'mon-ga'],
        	['id_category_system'=> 1, 'ten_danhmuc'=>'Món lẩu', 'ten_dm_khongdau'=>'mon-lau'],
        	['id_category_system'=> 1, 'ten_danhmuc'=>'Sushi', 'ten_dm_khongdau'=>'sushi'],
        	['id_category_system'=> 1, 'ten_danhmuc'=>'Mì phở', 'ten_dm_khongdau'=>'mi-pho'],
        	['id_category_system'=> 1, 'ten_danhmuc'=>'Cơm hộp', 'ten_dm_khongdau'=>'com-hop'],
        	['id_category_system'=> 4, 'ten_danhmuc'=>'Đặc sản', 'ten_dm_khongdau'=>'dac-san'],
        	['id_category_system'=> 4, 'ten_danhmuc'=>'Ăn chay', 'ten_dm_khongdau'=>'an-chay'],
        	['id_category_system'=> 4, 'ten_danhmuc'=>'Trái cây', 'ten_dm_khongdau'=>'trai-cay'],
        	['id_category_system'=> 4, 'ten_danhmuc'=>'Thịt trứng', 'ten_dm_khongdau'=>'thit-trung'],
        	['id_category_system'=> 4, 'ten_danhmuc'=>'Hải sản', 'ten_dm_khongdau'=>'hai-san'],
        	['id_category_system'=> 4, 'ten_danhmuc'=>'Rau củ', 'ten_dm_khongdau'=>'rau-cu'],
        	['id_category_system'=> 4, 'ten_danhmuc'=>'Gạo mì', 'ten_dm_khongdau'=>'gao-mi'],
        	['id_category_system'=> 4, 'ten_danhmuc'=>'Đồ uống/Ăn vật', 'ten_dm_khongdau'=>'do-uong-an-vat'],
        	['id_category_system'=> 4, 'ten_danhmuc'=>'Gia vị', 'ten_dm_khongdau'=>'gia-vi'],
        	['id_category_system'=> 3, 'ten_danhmuc'=>'Bia', 'ten_dm_khongdau'=>'bia'],
        	['id_category_system'=> 3, 'ten_danhmuc'=>'Rượu', 'ten_dm_khongdau'=>'ruou'],
        	['id_category_system'=> 5, 'ten_danhmuc'=>'Chúc mừng', 'ten_dm_khongdau'=>'chuc-mung'],
        	['id_category_system'=> 5, 'ten_danhmuc'=>'Sinh nhật', 'ten_dm_khongdau'=>'sinh-nhat'],
        	['id_category_system'=> 5, 'ten_danhmuc'=>'Tình yêu', 'ten_dm_khongdau'=>'tinh-yeu'],
        	['id_category_system'=> 5, 'ten_danhmuc'=>'Chia buồn', 'ten_dm_khongdau'=>'chia-buon'],
        	['id_category_system'=> 5, 'ten_danhmuc'=>'Cây cảnh', 'ten_dm_khongdau'=>'cay-canh'],
        	['id_category_system'=> 6, 'ten_danhmuc'=>'Mỹ phẩm', 'ten_dm_khongdau'=>'my-pham'],
        	['id_category_system'=> 6, 'ten_danhmuc'=>'Tã bỉm', 'ten_dm_khongdau'=>'ta-bim'],
        	['id_category_system'=> 6, 'ten_danhmuc'=>'Sữa', 'ten_dm_khongdau'=>'sua'],
        	['id_category_system'=> 6, 'ten_danhmuc'=>'Đồ chơi', 'ten_dm_khongdau'=>'cay-canh'],
        	['id_category_system'=> 6, 'ten_danhmuc'=>'Thiết bị', 'ten_dm_khongdau'=>'thiet-bi'],
        	['id_category_system'=> 6, 'ten_danhmuc'=>'Dụng cụ', 'ten_dm_khongdau'=>'dung-cu'],
        	['id_category_system'=> 6, 'ten_danhmuc'=>'Quần áo', 'ten_dm_khongdau'=>'quan-ao'],
        	['id_category_system'=> 6, 'ten_danhmuc'=>'Giày dép', 'ten_dm_khongdau'=>'giay-dep'],
        	['id_category_system'=> 6, 'ten_danhmuc'=>'Điện tử', 'ten_dm_khongdau'=>'dien-tu'],
        	['id_category_system'=> 6, 'ten_danhmuc'=>'Trang sức', 'ten_dm_khongdau'=>'trang-suc']
        ]);
    }
}

// tạo Seeder cho bảng shop
class shopSeeder extends Seeder{

	public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('shop')->insert([
        	[
        		'id_user'=>1, 
        		'ten_shop'=>'Nước Mía Mỹ Tho MT68',
        		'ten_khongdau' => 'nuoc-mia-my-tho-mt69',
        		'tinh_thanh' => 'Cần Thơ',
        		'quan_huyen' => 'Quận Ninh Kiều',
        		'phuong_xa' => '',
        		'dia_chi' => '41 Mạc Thiên Tích'
        	],
			[
        		'id_user'=>2, 
        		'ten_shop'=>'Ghiền - Ăn Vặt',
        		'ten_khongdau' => 'ghien-an-vat',
        		'tinh_thanh' => 'Cần Thơ',
        		'quan_huyen' => 'Quận Ninh Kiều',
        		'phuong_xa' => 'P. An Lạc',
        		'dia_chi' => '2 Phan Văn Trị'
        	]
        ]);
    }
}

// tạo Seeder cho bảng category_shop
class categoryShopSeeder extends Seeder{

	public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('category_shop')->insert([
        	['id_shop'=>2, 'ten_danhmuc'=>'Món hot 10k', 'ten_khongdau' => 'mon-hot-10k'],
        	['id_shop'=>2, 'ten_danhmuc'=>'Trà', 'ten_khongdau' => 'tra'],
        	['id_shop'=>2, 'ten_danhmuc'=>'Đá xay', 'ten_khongdau' => 'da-xay'],
        	['id_shop'=>2, 'ten_danhmuc'=>'Chè', 'ten_khongdau' => 'che'],
        	['id_shop'=>2, 'ten_danhmuc'=>'Trà sữa', 'ten_khongdau' => 'tra-sua'],
        	['id_shop'=>2, 'ten_danhmuc'=>'Xiên que', 'ten_khongdau' => 'xien-que'],
        	['id_shop'=>2, 'ten_danhmuc'=>'Phần ăn vật', 'ten_khongdau' => 'phan-an-vat'],
        	['id_shop'=>2, 'ten_danhmuc'=>'Soda ý', 'ten_khongdau' => 'soda-y'],
        	['id_shop'=>2, 'ten_danhmuc'=>'Mojito', 'ten_khongdau' => 'mojito'],
        	['id_shop'=>1, 'ten_danhmuc'=>'Giờ vàng 1 đô', 'ten_khongdau' => 'gio-vang-1-do'],
        	['id_shop'=>1, 'ten_danhmuc'=>'combo freeship', 'ten_khongdau' => 'combo-freeship'],
        	['id_shop'=>1, 'ten_danhmuc'=>'Đặc biệt', 'ten_khongdau' => 'dac-biet'],
        	['id_shop'=>1, 'ten_danhmuc'=>'menu', 'ten_khongdau' => 'menu']
        ]);
    }
}

