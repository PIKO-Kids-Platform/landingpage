<?php

use Illuminate\Database\Seeder;

class BookPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('book_pages')->insert([
            'number' => 0,
            'path' => "book_pages\page_0.jpg",            
        ]);
    }
}
