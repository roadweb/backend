<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RightTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 5; $i++) {
            DB::table('right')->insert([
                'name' => $faker->unique()->word,
            ]);
        }
    }
}