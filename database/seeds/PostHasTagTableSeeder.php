<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostHasTagTableSeeder extends Seeder {

    public function run()
    {

        for ($i = 0; $i < 100; $i++) {
            DB::table('posts_has_tags')->insert([
                'post_id' => $i+1,
                'tag_id' => rand(1,2),
            ]);
            DB::table('posts_has_tags')->insert([
                'post_id' => $i+1,
                'tag_id' => rand(3,4),
            ]);
            DB::table('posts_has_tags')->insert([
                'post_id' => $i+1,
                'tag_id' => rand(0,1)*5,
            ]);
        }
    }
}