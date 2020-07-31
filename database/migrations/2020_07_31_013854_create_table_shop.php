<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableShop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('shop')) {
            Schema::create('shop', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger('tab_id');
                $table->unsignedBigInteger('user_id');
                $table->string('name');
                $table->string('unsigned_name')->nullable(); // tỉnh thành
                $table->string('provincial')->nullable(); // quận huyện
                $table->string('area')->nullable(); // phường xã
                $table->string('address')->nullable();// địa chỉ
                $table->string('phone')->nullable();
                $table->string('email')->nullable();
                $table->string('time_open')->nullable(); // giờ mở cửa
                $table->string('time_close')->nullable(); // giờ đóng cửa
                $table->string('price_low')->nullable(); // giá thấp nhất
                $table->string('price_exp')->nullable(); // giá lớn nhất
                $table->integer('status')->default(1);
                $table->timestamps();
                $table->foreign('tab_id')->references('id')->on('tabs');
                $table->foreign('user_id')->references('id')->on('users');
            });
        }
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop');
    }
    
}
