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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('uuid')->unsigned()->index();
            $table->string('image');
            $table->string('description');
            $table->string('intro_video');
            $table->timestamps();
        });

        Schema::create('category_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('categories_id')->unsigned();
            $table->string('name')->nullable();
            $table->string('locale')->index();
            $table->unique(['categories_id', 'locale']);
            $table->foreign('categories_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
