<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHajjTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hajj', function (Blueprint $table) {
            $table->increments('id');
            $table->string('agen_id');
            $table->string('agent_name');
            $table->string('agent_address');
            $table->string('agent_email');
            $table->string('atol_number');
            $table->string('iata_number');
            $table->string('abta_number');
            $table->string('other_info');
            $table->string('agent_logo');
            $table->string('package_url');
            $table->string('shifting');
            $table->string('flights');
            $table->string('publish');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('price');
            $table->string('mk_hotel');
            $table->string('mk_address');
            $table->string('mk_distance');
            $table->string('mk_map_link');
            $table->string('mk_rating');
            $table->string('mk_rm_quad');
            $table->string('mk_rm_quad_price');
            $table->string('mk_rm_triple');
            $table->string('mk_rm_triple_price');
            $table->string('mk_rm_double');
            $table->string('mk_rm_double_price');
            $table->string('mk_rm_basis');
            $table->string('md_hotel');
            $table->string('md_address');
            $table->string('md_distance');
            $table->string('md_map_link');
            $table->string('md_rating');
            $table->string('md_rm_quad');
            $table->string('md_rm_quad_price');
            $table->string('md_rm_triple');
            $table->string('md_rm_triple_price');
            $table->string('md_rm_double');
            $table->string('md_rm_double_price');
            $table->string('md_rm_basis');
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
        Schema::dropIfExists('hajj');
    }
}
