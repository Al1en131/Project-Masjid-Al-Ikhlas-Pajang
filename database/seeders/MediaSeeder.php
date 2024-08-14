<?php

namespace Database\Seeders;

use App\Models\Financial;
use Illuminate\Database\Seeder;
use App\Models\Media;
use Illuminate\Support\Str;
use Stringable;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $financials= Financial::all();
        foreach ($financials as $financial) {
            $imageUrl = 'https://picsum.photos/400';
            $newFileName = Str::random(8) . '.png';
            $financial->addMediaFromUrl($imageUrl)
                ->usingFileName($newFileName)
                ->toMediaCollection('financial');
        }
    }
}

