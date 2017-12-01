<?php

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            'user_id' => '1',
            'resort_slug' => 'vail',
            'stars' => 5,
            'body' => 'This is the best resort ever! Awesome slopes, awesome park!',
        ]);
        DB::table('reviews')->insert([
            'user_id' => '2',
            'resort_slug' => 'vail',
            'stars' => 3,
            'body' => 'Meh.. could be better',
        ]);
    }
}
