<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasedProductShoppingCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchased_product_shopping_cart', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('shopping_cart_id');
            $table->foreign('shopping_cart_id')
                ->references('id')
                ->on('shopping_carts')
                ->onDelete('cascade');

            $table->unsignedBigInteger('purchased_product_id');
            $table->foreign('purchased_product_id')
                ->references('id')
                ->on('purchased_products')
                ->onDelete('cascade');

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
        Schema::dropIfExists('purchased_product_shopping_cart');
    }
}
