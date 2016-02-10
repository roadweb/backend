<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialNetworkTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 5; $i++) {
            DB::table('socialnetwork')->insert([
                'created_at' => $faker->unixTime($max = 'now'),
                'updated_at' => $faker->unixTime($max = 'now'),
                'name' => $faker->unique()->word,
            ]);
        }
    }
}