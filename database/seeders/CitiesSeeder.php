<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = Country::all();

        foreach ($countries as $country) {
            $cities = $country->cities;

            foreach ($cities as $city) {
                City::create([
                    'name' => $city->name,
                    'country_id' => $country->id,
                ]);
            }
        }
    }
}
