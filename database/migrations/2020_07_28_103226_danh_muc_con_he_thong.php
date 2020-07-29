<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DanhMucConHeThong extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('category_child_system')) {
            Schema::create('category_child_system', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger('id_category_system');
                $table->string('ten_danhmuc');
                $table->string('ten_dm_khongdau')->nullable();
                $table->integer('trang_thai')->default(1);
                $table->timestamps();
                $table->foreign('id_category_system')->references('id')->on('category_system');
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
        Schema::dropIfExists('category_child_system');
    }
}
