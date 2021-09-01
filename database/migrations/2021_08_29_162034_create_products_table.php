<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');

            $table->string('name', 60)->unique();
            $table->string('slug')->unique();
            $table->string('description', 3000)->nullable();
            $table->unsignedInteger('price');
            $table->unsignedSmallInteger('stock');
            $table->boolean('published')->default(false);
            $table->string('image'); // original image
            $table->string('small_image'); // minimized image
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
        Schema::dropIfExists('products');
    }
}
