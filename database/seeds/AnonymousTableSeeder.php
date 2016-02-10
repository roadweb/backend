<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnonymousTableSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 20; $i++) {
            DB::table('anonymous')->insert([
                'created_at' => $faker->unixTime($max = 'now'),
                'email' => $faker->unique()->email,
                'username' => $faker->unique()->userName,
            ]);
        }
    }
}