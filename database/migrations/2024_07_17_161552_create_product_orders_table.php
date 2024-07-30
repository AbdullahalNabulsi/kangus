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
        Schema::create('product_orders', function (Blueprint $table) {
            $table->id();
            $table->enum('status', ["pending", "Approved", "Accepted", "Rejected"])->nullable()->default("pending");
            $table->decimal('total')->nullable();
            $table->decimal('total_discount')->nullable();
            $table->decimal('net_total')->nullable();
            $table->string('discount_type')->nullable();
            $table->bigInteger('coupon_id')->unsigned();
            $table->foreign('coupon_id')
                ->references('id')
                ->on('coupons')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_orders');
    }
};
