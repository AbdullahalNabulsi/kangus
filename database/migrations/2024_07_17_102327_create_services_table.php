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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('uuid')->unsigned()->index();
            $table->bigInteger('category_id')->unsigned()->index();
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');
                
            $table->string('image')->nullable();
            $table->string('arabic_note')->nullable();
            $table->string('english_note')->nullable();
            $table->string('description')->nullable();
            $table->tinyInteger('active')->default(1);
            $table->timestamps();
        });

        Schema::create('services_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('services_id')->unsigned();
            $table->string('name')->nullable();
            $table->string('locale')->index();
            $table->unique(['services_id', 'locale']);
            $table->foreign('services_id')
                ->references('id')
                ->on('services')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
