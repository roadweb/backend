<?php

use Illuminate\Database\Seeder;

class AskTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create();
        $type = ['anonymous', 'users'];

        for ($i = 0; $i < 100; $i++) {
            $postId = rand(0,1)*rand(1,100);
            if ($postId==0){$postId=null;}
            DB::table('asks')->insert([
                'job_id'=> rand(1,5),
                'manager_id'=> rand(1,10),
                'state_id'=> rand(1,5),
                'askable_id'=> rand(1,10),
                'askable_type'=> $type[rand(0,1)],
                'matter'=> $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'likes'=> rand(1,5000),
                'created_at' => $faker->dateTime($max = 'now'),
                'post_id'=>$postId,
            ]);
        }
    }
}