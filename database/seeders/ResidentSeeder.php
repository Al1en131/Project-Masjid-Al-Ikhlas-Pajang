<?php

namespace Database\Seeders;

use App\Models\Resident;
use App\Models\User;
use Illuminate\Database\Seeder;

class ResidentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            Resident::create([
                'nik' => fake()->numerify('##############'), 
                'name' => fake()->name(),
                'gender' => fake()->randomElement(['Laki-Laki', 'Perempuan']),
                'birth' => fake()->date(),
                'status' => fake()->randomElement(['Menikah', 'Belum Menikah']),
                'religion' => fake()->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha', 'Konghucu', 'lainnya']),
                'blood' => fake()->randomElement(['A', 'B', 'AB', 'O']),
                'phone' => fake()->phoneNumber(),
                'job' => fake()->jobTitle(),
                'last_education' => fake()->randomElement(['SD', 'SMP', 'SMA', 'Diploma', 'S1', 'S2', 'S3']),
                'user_id' => User::inRandomOrder()->first()->id ?? null, // Assigns a random user_id or null if no users exist
            ]);
        }
        
    }
}
