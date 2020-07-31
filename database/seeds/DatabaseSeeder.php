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
       
       //$this->call(tabs_seed::class);
       //$this->call(tab_childs_seed::class);
       //$this->call(shop_seed::class);
       $this->call(menu_foods_seed::class);
    }
}
// tạo Seeder cho bảng category_shop
class tabs_seed extends Seeder{

	public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('tabs')->insert([
        	['name'=>'Đồ ăn', 'unsigned_name'=>'do-an'],
    		['name'=>'Đặt bàn', 'unsigned_name'=>'dat-ban'],
    		['name'=>'Rượu bia', 'unsigned_name'=>'ruou-bia'],
    		['name'=>'Thực phẩm', 'unsigned_name'=>'thuc-pham'],
    		['name'=>'Hoa', 'unsigned_name'=>'hoa'],
    		['name'=>'Sản phẩm', 'unsigned_name'=>'san-pham']
        ]);
    }
}

// tạo Seeder cho bảng category_child_system
class tab_childs_seed extends Seeder{

    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('tab_childs')->insert([
            ['tab_id'=> 1, 'name'=>'Đồ ăn', 'unsigned_name'=>'do-an'],
            ['tab_id'=> 1, 'name'=>'Đồ uống', 'unsigned_name'=>'do-uong'],
            ['tab_id'=> 1, 'name'=>'Đồ chay', 'unsigned_name'=>'do-chay'],
            ['tab_id'=> 1, 'name'=>'Bánh kem', 'unsigned_name'=>'banh-kem'],
            ['tab_id'=> 1, 'name'=>'Tráng miệng', 'unsigned_name'=>'trang-mieng'],
            ['tab_id'=> 1, 'name'=>'Vỉa hè', 'unsigned_name'=>'via-he'],
            ['tab_id'=> 1, 'name'=>'Pizza/Burger', 'unsigned_name'=>'pizza-burger'],
            ['tab_id'=> 1, 'name'=>'Món gà', 'unsigned_name'=>'mon-ga'],
            ['tab_id'=> 1, 'name'=>'Món lẩu', 'unsigned_name'=>'mon-lau'],
            ['tab_id'=> 1, 'name'=>'Sushi', 'unsigned_name'=>'sushi'],
            ['tab_id'=> 1, 'name'=>'Mì phở', 'unsigned_name'=>'mi-pho'],
            ['tab_id'=> 1, 'name'=>'Cơm hộp', 'unsigned_name'=>'com-hop'],
            ['tab_id'=> 4, 'name'=>'Đặc sản', 'unsigned_name'=>'dac-san'],
            ['tab_id'=> 4, 'name'=>'Ăn chay', 'unsigned_name'=>'an-chay'],
            ['tab_id'=> 4, 'name'=>'Trái cây', 'unsigned_name'=>'trai-cay'],
            ['tab_id'=> 4, 'name'=>'Thịt trứng', 'unsigned_name'=>'thit-trung'],
            ['tab_id'=> 4, 'name'=>'Hải sản', 'unsigned_name'=>'hai-san'],
            ['tab_id'=> 4, 'name'=>'Rau củ', 'unsigned_name'=>'rau-cu'],
            ['tab_id'=> 4, 'name'=>'Gạo mì', 'unsigned_name'=>'gao-mi'],
            ['tab_id'=> 4, 'name'=>'Đồ uống/Ăn vật', 'unsigned_name'=>'do-uong-an-vat'],
            ['tab_id'=> 4, 'name'=>'Gia vị', 'unsigned_name'=>'gia-vi'],
            ['tab_id'=> 3, 'name'=>'Bia', 'unsigned_name'=>'bia'],
            ['tab_id'=> 3, 'name'=>'Rượu', 'unsigned_name'=>'ruou'],
            ['tab_id'=> 5, 'name'=>'Chúc mừng', 'unsigned_name'=>'chuc-mung'],
            ['tab_id'=> 5, 'name'=>'Sinh nhật', 'unsigned_name'=>'sinh-nhat'],
            ['tab_id'=> 5, 'name'=>'Tình yêu', 'unsigned_name'=>'tinh-yeu'],
            ['tab_id'=> 5, 'name'=>'Chia buồn', 'unsigned_name'=>'chia-buon'],
            ['tab_id'=> 5, 'name'=>'Cây cảnh', 'unsigned_name'=>'cay-canh'],
            ['tab_id'=> 6, 'name'=>'Mỹ phẩm', 'unsigned_name'=>'my-pham'],
            ['tab_id'=> 6, 'name'=>'Tã bỉm', 'unsigned_name'=>'ta-bim'],
            ['tab_id'=> 6, 'name'=>'Sữa', 'unsigned_name'=>'sua'],
            ['tab_id'=> 6, 'name'=>'Đồ chơi', 'unsigned_name'=>'cay-canh'],
            ['tab_id'=> 6, 'name'=>'Thiết bị', 'unsigned_name'=>'thiet-bi'],
            ['tab_id'=> 6, 'name'=>'Dụng cụ', 'unsigned_name'=>'dung-cu'],
            ['tab_id'=> 6, 'name'=>'Quần áo', 'unsigned_name'=>'quan-ao'],
            ['tab_id'=> 6, 'name'=>'Giày dép', 'unsigned_name'=>'giay-dep'],
            ['tab_id'=> 6, 'name'=>'Điện tử', 'unsigned_name'=>'dien-tu'],
            ['tab_id'=> 6, 'name'=>'Trang sức', 'unsigned_name'=>'trang-suc']
        ]);
    }
}

// tạo Seeder cho bảng shop
class shop_seed extends Seeder{

    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('shop')->insert([
            [
                'user_id'=>1,
                'tab_id'=>1,
                'name'=>'Nước Mía Mỹ Tho MT68',
                'unsigned_name' => 'nuoc-mia-my-tho-mt69',
                'provincial' => 'Cần Thơ',
                'area' => 'Quận Ninh Kiều',
                'address' => '41 Mạc Thiên Tích'
            ],
            [
                'user_id'=>2,
                'tab_id '=>1,
                'name'=>'Ghiền - Ăn Vặt',
                'unsigned_name' => 'ghien-an-vat',
                'provincial' => 'Cần Thơ',
                'area' => 'Quận Ninh Kiều',
                'address' => '2 Phan Văn Trị'
            ]
        ]);
    }
}

// tạo Seeder cho bảng category_shop
class menu_foods_seed extends Seeder{

    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('menu_foods')->insert([
            ['shop_id'=>2, 'name'=>'Món hot 10k', 'unsigned_name' => 'mon-hot-10k'],
            ['shop_id'=>2, 'name'=>'Trà', 'unsigned_name' => 'tra'],
            ['shop_id'=>2, 'name'=>'Đá xay', 'unsigned_name' => 'da-xay'],
            ['shop_id'=>2, 'name'=>'Chè', 'unsigned_name' => 'che'],
            ['shop_id'=>2, 'name'=>'Trà sữa', 'unsigned_name' => 'tra-sua'],
            ['shop_id'=>2, 'name'=>'Xiên que', 'unsigned_name' => 'xien-que'],
            ['shop_id'=>2, 'name'=>'Phần ăn vật', 'unsigned_name' => 'phan-an-vat'],
            ['shop_id'=>2, 'name'=>'Soda ý', 'unsigned_name' => 'soda-y'],
            ['shop_id'=>2, 'name'=>'Mojito', 'unsigned_name' => 'mojito '],
            ['shop_id'=>1, 'name'=>'Giờ vàng 1 đô', 'unsigned_name' => 'gio-vang-1-do'],
            ['shop_id'=>1, 'name'=>'combo freeship', 'unsigned_name' => 'combo-freeship'],
            ['shop_id'=>1, 'name'=>'Đặc biệt', 'unsigned_name' => 'dac-biet'],
            ['shop_id'=>1, 'name'=>'menu', 'unsigned_name' => 'menu']
        ]);
    }
}


