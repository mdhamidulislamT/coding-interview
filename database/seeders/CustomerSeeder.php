<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        for ($i = 0; $i < 20; $i++) {
            $email = "cutomer" . ($i+1). "@gmail.com";

            DB::table('customers')->insert([
                'name' => 'Customer - ' . $i + 1,
                'email' => $email,
                'password' => Hash::make('12345678'),
            ]);
        }
    }
}
