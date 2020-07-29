<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DanhMucHethong extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('category_system')) {
            Schema::create('category_system', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('ten_danhmuc');
                $table->string('ten_dm_khongdau')->nullable();
                $table->integer('trang_thai')->default(1);
                $table->timestamps();
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
        Schema::dropIfExists('category_system');
    }
}
