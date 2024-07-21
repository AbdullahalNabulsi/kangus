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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('uuid')->unsigned()->index();

            $table->timestamps();
            $table->bigInteger('category_id')->unsigned()->index();
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');

            $table->bigInteger('unit_id')->unsigned()->index()->nullable();
            $table->foreign('unit_id')
            ->references('id')
            ->on('units')
            ->onDelete('restrict');

            $table->bigInteger('product_type_id')->unsigned()->index();

            $table->decimal('price', 20, 4, true)->nullable();
            $table->tinyInteger('serial_number')->default(0);
            $table->tinyInteger('lot_number')->default(0);
            $table->string('product_number');
            $table->string('arabic_note')->nullable();
            $table->string('english_note')->nullable();
            $table->tinyInteger('active')->default(1);
        });

        Schema::create('product_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('product_id')->unsigned()->index();
            $table->string('locale')->index();
            $table->string('name');
            $table->unique(['product_id', 'locale']);
            $table->foreign('product_id')
                ->references('id')
                ->on('products')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
