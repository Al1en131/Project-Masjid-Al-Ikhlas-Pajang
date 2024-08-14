<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Financial;
use Carbon\Carbon;

class FinancialSeeder extends Seeder
{
    public function run()
    {
        // Loop untuk membuat 10 data financial
        for ($i = 1; $i <= 10; $i++) {
            $date = Carbon::now()->subDays(10 - $i); // Menghasilkan tanggal yang berbeda
            
            Financial::firstOrCreate([
                'date' => $date,
            ]);
        }
    }
}
