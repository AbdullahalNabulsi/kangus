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
        Schema::create('product_types', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        Schema::create('product_type_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('product_type_id')->unsigned()->index();
            $table->string('locale')->index();
            $table->string('name');
            $table->unique(['product_type_id', 'locale']);
            $table->foreign('product_type_id', 'product_type_translations_id_foreign')
                ->references('id')
                ->on('product_types')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_types');
    }
};
