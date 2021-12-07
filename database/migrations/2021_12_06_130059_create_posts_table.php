<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->string('title', 30);
            $table->string('text', 300);
            $table->integer('avarage_stars')->default(0);
            $table->integer('activity_stars')->default(0);
            $table->integer('healing_stars')->default(0);
            $table->integer('food_deliciousness_stars')->default(0);
            $table->integer('cityscape_stars')->default(0);
            $table->integer('cleanliness_stars')->default(0);
            $table->string('travel_img_path_1', 254)->nullable();
            $table->string('travel_img_path_2', 254)->nullable();
            $table->string('travel_img_path_3', 254)->nullable();
            $table->string('travel_img_path_4', 254)->nullable();
            $table->string('travel_img_path_5', 254)->nullable();
            $table->integer('country');
            $table->string('municipalities',10);
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
        Schema::dropIfExists('posts');
    }
}
