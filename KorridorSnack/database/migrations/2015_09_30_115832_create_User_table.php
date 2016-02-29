<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('User', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fname', '255');
            $table->string('email', '255');
            $table->string('password', '255');
            $table->string('profilbild', '255');
            $table->string('program', '255');
            $table->timestamps();
         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('User');
    }
}
