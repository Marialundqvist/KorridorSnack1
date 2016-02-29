<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKategorierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
             Schema::create('Kategorier', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('laxhjalp', '255');
            $table->string('evenemang', '255');
            $table->string('hittaratt', '255');
            $table->string('snack', '255');
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
        Schema::drop('Kategorier');
    }
}
