<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserDetailsTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 100; $i++) {
            DB::table('userdetails')->insert([
                'job_id'=>rand(1,5),
                'right_id'=>rand(1,5),
                'user_id'=>rand(1,10),
                'ip'=>$faker->ipv4,
                'training_id'=>rand(1,5),
                'firstname'=>$faker->firstName,
                'lastname'=>$faker->lastName,
                'address'=>$faker->address,
                'city'=>$faker->city,
                'country'=>$faker->country,
                'birthday'=>$faker->date($format = 'd-m-Y', $max = '31-12-2010'),
                'avatar'=>$faker->word,
                'visibility'=>rand(0,1),
                'bio'=>$faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'asso'=>rand(0,1),
                'created_at' => $faker->unixTime($max = 'now'),
                'updated_at' => $faker->unixTime($max = 'now'),
                'website'=>$faker->url,
            ]);
        }
    }
}