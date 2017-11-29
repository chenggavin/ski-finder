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
            'country' => 'United States of America',
            'status' => true,
            'lower_snow' =>'',
            'upper_snow' =>'',
            'conditions' => 'Sunny',
            'new_snow_in' => '0.0',
            'pct_open' => '7.9',
            'lifts_open' => '8',

        ]);
    }
}
