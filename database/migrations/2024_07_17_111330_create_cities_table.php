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
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('country_id')->unsigned()->index();
        });
        
        Schema::create('city_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('city_id')->unsigned()->index();
            $table->string('locale')->index();
            $table->string('name');

            $table->unique(['city_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cities');
    }
};
