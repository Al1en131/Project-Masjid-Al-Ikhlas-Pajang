<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProfileMasjidSeeder extends Seeder
{
    public function run()
    {
        DB::table('profile_masjids')->insert([
            [
                'about' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s.',
                'activity' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s.',
                'gallery' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s.',
                'address' => 'Jalan Kidul Pasar No.05, Pajang, Kec. Laweyan,
                            Kota Surakarta, Jawa
                            Tengah 57146',
                'detail_contact' => '087867564534',
                'detail_account_number' => '4.7777.0000.1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
