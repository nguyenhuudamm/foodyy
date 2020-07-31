<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('sales')) {
            Schema::create('sales', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger('shop_id');
                $table->string('name');
                $table->string('unsigned_name')->nullable(); 
                $table->string('percent')->nullable(); // đơn vị
                $table->string('start_date')->nullable(); 
                $table->string('end_date')->nullable();
                $table->string('start_time')->nullable();
                $table->string('end_time')->nullable();
                $table->integer('status')->default(1);
                $table->timestamps();
                $table->foreign('shop_id')->references('id')->on('shop');
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
        Schema::dropIfExists('sales');
    }
}
