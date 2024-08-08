<?php

namespace Database\Seeders;

use App\Models\Wife;
use Illuminate\Database\Seeder;

class WifeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ambil semua resident_id dari tabel residents untuk memastikan relasi foreign key
        $residentIds = \App\Models\Resident::pluck('id')->toArray();

        // Pastikan ada resident_id yang valid untuk digunakan
        if (count($residentIds) > 0) {
            for ($i = 0; $i < 10; $i++) {
                Wife::create([
                    'resident_id' => fake()->randomElement($residentIds),
                    'name_wife' => fake()->name(),
                    'gender_wife' => 'Perempuan', // Asumsinya gender_wife akan selalu 'Perempuan' karena ini tabel istri
                    'birth_wife' => fake()->date(),
                    'religion_wife' => fake()->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha', 'Konghucu', 'lainnya']),
                    'blood_wife' => fake()->randomElement(['A', 'B', 'AB', 'O']),
                    'phone_wife' => fake()->phoneNumber(),
                    'job_wife' => fake()->jobTitle(),
                    'last_education_wife' => fake()->randomElement(['SD', 'SMP', 'SMA', 'Diploma', 'S1', 'S2', 'S3']),
                ]);
            }
        }
    }
}
