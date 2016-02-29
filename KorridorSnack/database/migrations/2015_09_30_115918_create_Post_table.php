<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('Post', function (Blueprint $table) {
            $table->increments('ID');
            $table->integer('user_id');
            $table->integer('likea_id');
            $table->integer('category_id');
            $table->integer('comment_id');
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
        Schema::drop('Post');
    }
}
