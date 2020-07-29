<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        // cập nhật bảng category_system
        // Schema::table('category_system', function (Blueprint $table) {
        //     $table->string('ten_dm_khongdau')->nullable();
        //     $table->integer('trang_thai')->default(1);
        // });
        Schema::table('category_system', function (Blueprint $table) {
            $table->string('ten_dm_khongdau')->nullable()->change();
            $table->integer('trang_thai')->default(1)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
