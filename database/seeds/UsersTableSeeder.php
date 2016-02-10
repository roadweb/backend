<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 0; $i < 10; ++$i)
        {
            DB::table('users')->insert([
                'email' => 'email' . $i . '@blop.fr',
                'username' => $faker->unique()->userName,
                'password' => bcrypt('password' . $i),
                'created_at' => $faker->unixTime($max = 'now'),
            ]);
        }
    }
}