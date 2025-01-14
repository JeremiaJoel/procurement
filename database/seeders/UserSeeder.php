<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
                'nama' => 'Company A',
                'email' => 'company1@pkl.com',
                'password' => Hash::make('123456'),
                'buyer' => '1',
                'supplier' => '0'
            ],
            // [
            //     'nam' => 'Company B',
            //     'email' => 'company2@pkl.com',
            //     'password' => Hash::make('123456'),
            //     'buyer' => '0',
            //     'supplier' => '1'
            // ]
        );
    }
}
