<?php

namespace Database\Seeders;

use App\Models\Children;
use Illuminate\Database\Seeder;

class ChildrenSeeder extends Seeder
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
                Children::create([
                    'resident_id' => fake()->randomElement($residentIds),
                    'name_child' => fake()->name(),
                    'gender_child' => fake()->randomElement(['Laki-Laki', 'Perempuan']),
                    'birth_child' => fake()->date(),
                    'status_child' => fake()->randomElement(['Menikah', 'Belum Menikah']),
                    'religion_child' => fake()->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha', 'Konghucu', 'lainnya']),
                    'blood_child' => fake()->randomElement(['A', 'B', 'AB', 'O']),
                    'phone_child' => fake()->phoneNumber(),
                    'job_child' => fake()->jobTitle(),
                    'last_education_child' => fake()->randomElement(['SD', 'SMP', 'SMA', 'Diploma', 'S1', 'S2', 'S3']),
                ]);
            }
        }
    }
}
