<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobsTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 5; $i++) {
            DB::table('jobs')->insert([
                'name' => $faker->unique()->word,
                'created_at' => $faker->dateTime($max = 'now'),
            ]);
        }
    }
}