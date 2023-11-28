<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        for ($i = 0; $i < 10; $i++) {
            $email = "employee" . $i+1 . "@gmail.com";

            DB::table('employees')->insert([
                'name' => 'Employee - ' . $i + 1,
                'email' => $email,
                'password' => Hash::make('12345678'),
            ]);
        }
    }
}
