<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    }

    public function runLandlordSpecificSeeders()
    {
        $this->call([
            // AdminSeeder::class,
            RoleSeeder::class,
            PremissionSeeder::class,
            RolePermissionSeeder::class,
            CountryCitySeeder::class,
            // HelpersSeeder::class,
            // ConfigSeeder::class,
            // PrintModelSeeder::class,
            // PrintModelPlaceholderSeeder::class,
        ]);
    }
}
