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
        Schema::create('tools', function (Blueprint $table) {
            $table->id();
            $table->string('description')->nullable();
            $table->bigInteger('categories_id')->unsigned();
            $table->foreign('categories_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');
            // $table->bigInteger('image_id')->unsigned();
            // $table->foreign('image_id')
            //     ->references('id')
            //     ->on('images')
            //     ->onDelete('cascade');
            $table->string('size')->nullable();
            // $table->bigInteger('type_id')->unsigned();
            // $table->foreign('type_id')
            //     ->references('id')
            //     ->on('types')
            //     ->onDelete('cascade');

            $table->timestamps();
        });

        Schema::create('tool_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('tool_id')->unsigned();
            $table->string('name')->nullable();
            $table->string('locale')->index();
            $table->unique(['tool_id', 'locale']);
            $table->foreign('tool_id')
                ->references('id')
                ->on('tools')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tools');
    }
};
