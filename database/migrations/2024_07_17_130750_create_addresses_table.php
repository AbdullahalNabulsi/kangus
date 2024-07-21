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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('contact_id')->unsigned()->index();
            $table->string('postal_code')->nullable();
            $table->string('extra_number')->nullable();
            $table->string('unit_number')->nullable();
            $table->string('street')->nullable();

            $table->bigInteger('city_id')->unsigned()->index()->nullable();
            $table->bigInteger('country_id')->unsigned()->index()->nullable();
            $table->string('building_number')->nullable();
            $table->string('plot_identification')->nullable();
            $table->string('city_subdivision_name')->nullable();
            $table->string('country_subentity')->nullable();
        });

        Schema::create('address_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('address_id')->unsigned()->index();
            $table->string('locale')->index();
            $table->string('address')->nullable();

            $table->unique(['address_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
