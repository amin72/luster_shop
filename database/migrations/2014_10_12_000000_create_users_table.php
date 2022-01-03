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
            $table->string('name', 60);
            $table->string('phone', 11)->unique();
            $table->timestamp('phone_verified_at')->nullable();
            $table->string('password');
            $table->boolean('is_active')->default(false);
            $table->boolean('is_admin')->default(false);
            $table->string('info', 1024)->nullable();
            $table->string('image_path')->nullable();
            $table->string('token', 6)->default('');
            $table->dateTime('token_expires_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
