<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SEOTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 100; $i++) {
            DB::table('seo')->insert([
                'post_id' => $i+1,
                'url_thumb'=> $faker->unique()->url,
                'alt_thumb'=> $faker->sentence,
                'title_thumb'=> $faker->word,
                'head_title'=> $faker->title,
                'head_description'=>$faker->sentence,
                'head_keywords'=>$faker->words($nb = 3, $asText = false),
            ]);
        }
    }
}