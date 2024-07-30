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
        Schema::create('product_order_products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id')->unsigned();
            $table->foreign('product_id')
                ->references('id')
                ->on('products')
                ->onDelete('cascade');
            $table->bigInteger('product_order_id')->unsigned();
            $table->foreign('product_order_id')
                ->references('id')
                ->on('product_orders')
                ->onDelete('cascade');

            $table->decimal('quantity')->nullable();
            $table->decimal('price')->nullable();
            $table->decimal('total')->nullable();
            $table->decimal('total_discount')->nullable();
            $table->decimal('net_total')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_order_products');
    }
};
