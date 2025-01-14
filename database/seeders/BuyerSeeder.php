<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BuyerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('buyers')->insert(
            [
                'buyer_id' => 'BY001',
                'user_id' => 1,
                'contact_person' => 'Jeremia Joel',
                'phone_number' => '081356675674',
                'email' => 'company1@pkl.com',
                'address' => 'Villa Mutiara Tembalang B3, Pedalangan, Banyumanik, Semarang, Jawa Tengah'

            ]
        );
    }
}
