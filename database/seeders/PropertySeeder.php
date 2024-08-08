<?php

namespace Database\Seeders;

use App\Models\Property;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            Property::create([
                'user_id' => fake()->randomElement(User::pluck('id')),
                'title' => ucfirst(fake()->words(fake()->numberBetween(2, 4), true)),
                'type' => fake()->randomElement(['Rumah', 'Tanah', 'Gedung', 'Ruko']),
                'certification' => fake()->sentence(),
                'price' => fake()->numberBetween(10000000, 100000000),
                'property_size' => fake()->numberBetween(50, 1000),
                'surface_size' => fake()->numberBetween(50, 500),
                'location' => fake()->address(),
                'description' => fake()->paragraph(),
                'is_sold' => 0,
                'is_archive' => 0,
            ]);
        }
    }
}
