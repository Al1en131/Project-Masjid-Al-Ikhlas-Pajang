<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Transaction;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            ResidentSeeder::class,
            WifeSeeder::class,
            ChildrenSeeder::class,
            ProfileMasjidSeeder::class,
            MediaSeeder::class,
            FinancialSeeder::class,
        ]);
    }
}
