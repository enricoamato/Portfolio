<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {      
        DB::table('books')->insert([
            [
                'title' => 'Think and Grow Rich',
                'rating' => 10
            ],
            [
                'title' => 'Rich Dad Poor Dad',
                'rating' => 8
            ],
            [
                'title' => 'Bulletproof',
                'rating' => 9
            ],
            [
                'title' => 'How to win friends and influence people',
                'rating' => 10
            ],
            [
                'title' => 'Mastering Bitcoin',
                'rating' => 9
            ],
            [
                'title' => 'Trading in the zone',
                'rating' => 9
            ],
            [
                'title' => 'Naked Forex',
                'rating' => 7
            ],
            [
                'title' => 'My inventions',
                'rating' => 10
            ]
        ]);
    }
}
