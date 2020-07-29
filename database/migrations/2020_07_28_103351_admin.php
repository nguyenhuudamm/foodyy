<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Admin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('admin')) {
            Schema::create('admin', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('name');
                $table->string('last_name');
                $table->string('email')->nullable();
                $table->string('password')->nullable();
                $table->string('phone')->nullable();
                $table->integer('gender')->nullable();
                $table->string('birth_date')->nullable();
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
        Schema::dropIfExists('admin');
    }
}
