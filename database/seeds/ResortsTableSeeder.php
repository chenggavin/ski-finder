<?php

use Illuminate\Database\Seeder;

class ResortsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resorts')->insert([
            'name' => 'Copper Mountain',
            'slug' => 'copper-mountain',
            'location' => 'Copper Mountain, Colorado',
            'open' => true,
            'conditions' => 'Sunny',
            'new_snow_in' => '0.0',
            'pct_open' => '7.9',
            'upper_snow' =>null,
            'lower_snow' =>null,
            'lifts_open' => '8',
            'img' => 'copper.png'

        ]);
        DB::table('resorts')->insert([
            'name' => 'Paoli Peaks',
            'slug' => 'paoli-peaks',
            'location' => 'Paoli, Indiana',
            'open' => false,
            'conditions' => 'Closed',
            'new_snow_in' => '0.0',
            'pct_open' => '0.0',
            'upper_snow' =>null,
            'lower_snow' =>null,
            'lifts_open' => '0',
            'img' => 'paoli.jpg'

        ]);
        DB::table('resorts')->insert([
            'name' => 'SnowShoe',
            'slug' => 'showshoe',
            'location' => 'Snowshoe, West Virginia',
            'open' => true,
            'conditions' => 'Sunny',
            'new_snow_in' => '0.0',
            'pct_open' => '15.0',
            'upper_snow' =>null,
            'lower_snow' =>null,
            'lifts_open' => '3/14',
            'img' => 'snowshoe.png'

        ]);
        DB::table('resorts')->insert([
            'name' => 'Sugar Mountain',
            'slug' => 'sugar-mountain',
            'location' => 'Sugar Mountain, North Carolina',
            'open' => true,
            'conditions' => 'Sunny',
            'new_snow_in' => '0.0',
            'pct_open' => '23.8',
            'upper_snow' =>null,
            'lower_snow' =>null,
            'lifts_open' => '2/8',
            'img' => 'sugar.png'

        ]);
        DB::table('resorts')->insert([
            'name' => 'Big Sky Resort',
            'slug' => 'big-sky',
            'location' => 'Big Sky, Montana',
            'open' => true,
            'conditions' => 'Sunny',
            'new_snow_in' => '2.0',
            'pct_open' => '19.7',
            'upper_snow' =>null,
            'lower_snow' =>null,
            'lifts_open' => '9/36',
            'img' => 'bigsky.jpg'
        ]);
        DB::table('resorts')->insert([
            'name' => 'Perfect North',
            'slug' => 'perfect-north',
            'location' => 'Lawrenceburg, Indiana',
            'open' => false,
            'conditions' => 'Cloudy',
            'new_snow_in' => '0.0',
            'pct_open' => '0.0',
            'upper_snow' =>null,
            'lower_snow' =>null,
            'lifts_open' => '0/5',
            'img' => 'perfectnorth.png'
        ]);
        DB::table('resorts')->insert([
            'name' => 'Val Thorens',
            'slug' => 'val-thorens',
            'location' => 'Val Thorens, France',
            'open' => true,
            'conditions' => 'Cloudy',
            'new_snow_in' => '0.8',
            'pct_open' => '0.0',
            'upper_snow' =>11.8,
            'lower_snow' =>10,
            'lifts_open' => '0/5',
            'img' => 'valthorens.jpg'
        ]);



    }
}
