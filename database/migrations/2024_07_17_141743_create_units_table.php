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
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('uuid')->unsigned()->index();

            $table->timestamps();
            $table->string('symbol')->nullable();
            $table->tinyInteger('active')->default(1);
            $table->tinyInteger('is_minimum')->default(0);
        });

        Schema::create('unit_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('unit_id')->unsigned()->index();
            $table->string('locale')->index();
            $table->string('name');
            $table->unique(['unit_id', 'locale']);

            $table->foreign('unit_id')
                ->references('id')
                ->on('units')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('units');
    }
};
