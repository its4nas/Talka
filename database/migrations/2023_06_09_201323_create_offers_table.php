<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->increments('offer_id');
            $table->integer('restaurant_id');
            $table->string('offer_name');
            $table->integer('price');
            $table->text('offer_photo');
            $table->integer('type_id');
            $table->timestamps();

            $table->foreign('restaurant_id')->refrences('restaurant_id')->on('restaurants')
            ->onDelete('casecade');
            $table->foreign('type_id')->refrences('type_id')->on('food_type')
            ->onDelete('casecade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offers');
    }
}
