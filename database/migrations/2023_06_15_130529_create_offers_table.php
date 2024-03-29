<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('restaurant_id');
            $table->foreign('restaurant_id')->references('id')->on('restaurants')->onDelete('cascade')->onUpdate('cascade');
            $table->string('offer_name')->nullable(false);
            $table->double('price')->nullable(false);
            $table->text('offer_photo');
            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id')->references('id')->on('food_types')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('deleted_by')->constrained('users','id')->nullable()->default(null);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
