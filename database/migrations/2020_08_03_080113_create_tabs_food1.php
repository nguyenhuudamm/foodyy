<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabsFood1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('tabs_food')) {
            Schema::create('tabs_food', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger('food_id');
                $table->unsignedBigInteger('tab_id');
                $table->timestamps();
                $table->foreign('food_id')->references('id')->on('foods')->onDelete('cascade')->onUpdate('cascade');;
                $table->foreign('tab_id')->references('id')->on('tab_childs')->onDelete('cascade')->onUpdate('cascade');;
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
        Schema::dropIfExists('tabs_food');
    }
}
