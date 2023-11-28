<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        for ($i = 0; $i < 20; $i++) {

            DB::table('messages')->insert([
                'message_category_id' => rand(1, 5),
                'customer_id' => rand(1, 20),
                'message' => fake()->paragraph(),
            ]);
        }


    }
}
