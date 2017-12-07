<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('reviews')->insert([
            'user_id' => '2',
            'resort_slug' => 'steamboat-springs',
            'stars' => 5,
            'body' => 'Lines were decent, scenery was great!',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('reviews')->insert([
            'user_id' => '3',
            'resort_slug' => 'snowshoe',
            'stars' => 3,
            'body' => 'For what it costs me to drive over there, I would of rather flew out west.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('reviews')->insert([
            'user_id' => '4',
            'resort_slug' => 'perfect-north',
            'stars' => 4,
            'body' => 'It is perfect, but it is not very north. It is perfect for the south',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
