<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory;


class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $faker = Faker\Factory::create();        
        
        for ($i=1; $i < 100; $i++) { 
            
            DB::table('articles')->insert([
                'user_id' => "2",
                'title' => $faker->realText($maxNbChars = 50, $indexSize = 2),
                'img_url' => "blog_imgs/in-blog-image-10.jpg",
                'body' => $faker->realText($maxNbChars = 1000, $indexSize = 2),            
                'created_at' => Carbon::now()->toDateString(),      
            ]);

            for ($j=0; $j < $faker->numberBetween($min = 1, $max = 10); $j++) { 
                # code...
                DB::table('article_tags')->insert([
                    'article_id' => $i,
                    'tag_id' => $faker->numberBetween($min = 1, $max = 20),
                ]);        
            }
    
            
        }
        
    }
}




