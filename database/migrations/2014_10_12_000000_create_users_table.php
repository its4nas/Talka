<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
           $table->unsignedBigInteger('user_role_id')->nullable(false)->default(2);
            $table->string('name')->nullable(false);
            $table->string('email')->nullable(false)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone');
            $table->string('password')->nullable(false);
            $table->rememberToken();
            $table->timestamps();


            $table->foreign('user_role_id')->references('id')
            ->on('user_roles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
