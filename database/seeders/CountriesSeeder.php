<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = Country::all();

        foreach ($countries as $country) {
            DB::table('countries')->insert([
                'name' => $country->name->common,
                // 'iso_alpha2' => $country->cca2,
                // 'iso_alpha3' => $country->cca3,
                // 'iso_numeric' => $country->ccn3,
            ]);
        }
    }
}
