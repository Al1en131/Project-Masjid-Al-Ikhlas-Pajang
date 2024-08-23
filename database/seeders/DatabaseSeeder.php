<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        if (app()->environment('production')) {
            // Seeder untuk production
            $this->call([
                RoleSeeder::class,
                AdminSeeder::class,
                UserSeeder::class,
                ProfileMasjidSeeder::class,

            ]);
        } else {
            // Seeder untuk non-production
            $this->call([
                RoleSeeder::class,
                AdminSeeder::class,
                UserSeeder::class,
                ResidentSeeder::class,
                WifeSeeder::class,
                ChildrenSeeder::class,
                ProfileMasjidSeeder::class,
                FinancialSeeder::class,
                MediaSeeder::class,
            ]);
        }
    }
}
