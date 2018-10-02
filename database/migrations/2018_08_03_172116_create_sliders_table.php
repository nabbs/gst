<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('description');
            $table->string('price');
            $table->string('main_image');
            $table->string('thumb_image');
            $table->string('button_one');
            $table->string('button_one_url');
            $table->string('button_two');
            $table->string('button_two_url');
            $table->string('button_three');
            $table->string('button_three_url');
            $table->string('button_four');
            $table->string('button_four_url');
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
        Schema::dropIfExists('sliders');
    }
}
