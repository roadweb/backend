<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainingTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 5; $i++) {
            DB::table('training')->insert([
                'name' => $faker->unique()->word,
                'created_at' => $faker->dateTime($max = 'now'),
            ]);
        }
    }
}