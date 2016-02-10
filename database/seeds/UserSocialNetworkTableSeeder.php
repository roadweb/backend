<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSocialNetworkTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('user_socialnetwork')->insert([
                'userdetails_id'=> $i+1,
                'socialnetwork_id'=> rand(1,2),
                'url' => $faker->unique()->url,
            ]);
            DB::table('user_socialnetwork')->insert([
                'userdetails_id'=> $i+1,
                'socialnetwork_id'=> rand(3,4),
                'url' => $faker->unique()->url,
            ]);
        }
    }
}