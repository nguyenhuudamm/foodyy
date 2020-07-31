<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTabChilds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('tab_childs')) {
            Schema::create('tab_childs', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger('tab_id');
                $table->string('name');
                $table->string('unsigned_name')->nullable();
                $table->integer('status')->default(1);
                $table->timestamps();
                $table->foreign('tab_id')->references('id')->on('tabs');
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
         Schema::dropIfExists('tab_childs');
    }
}
