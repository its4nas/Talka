<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('order_id');
            $table->integer('user_id');
            $table->integer('offer_id');
            $table->string('location');
            $table->binary('status');
            $table->timestamps();

            $table->foreign('user_id')->refrences('user_id')->on('users')
            ->onDelete('casecade');
            $table->foreign('offer_id')->refrences('offer_id')->on('offes')
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
        Schema::dropIfExists('orders');
    }
}
