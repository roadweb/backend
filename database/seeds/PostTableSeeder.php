<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create();
        $unixTimestamp = '1461067200'; // = 2016-04-19T12:00:00+00:00 in ISO 8601

        for ($i = 0; $i < 100; $i++) {
            $token=rand(0,1);
            DB::table('posts')->insert([
                'category_id' => rand(1, 5),
                'job_id' => rand(1, 5),
                'userdetails_id' => rand(1, 10),
                'title' => $faker->unique()->sentence,
                'resume' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'matter' => $faker->paragraph($nbSentences = 20),
                'is_sticky' => rand(0, 1),
                'sticky_end' => $faker->date('Y-m-d', $unixTimestamp),
                'published' => rand(0,1)*$token,
                'validated' => $token,
                'created_at' => $faker->dateTime($max = 'now'),
            ]);
        }
    }
}