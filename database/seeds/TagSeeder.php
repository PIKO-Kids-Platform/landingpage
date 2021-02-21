<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();        
        
        for ($i=0; $i < 20; $i++) { 

            DB::table('tags')->insert([
                'value' => $faker->word,                    
            ]);
        }

        
    }
}
