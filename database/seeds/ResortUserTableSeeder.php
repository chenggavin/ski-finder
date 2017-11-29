<?php

use Illuminate\Database\Seeder;

class ResortUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resort_user')->insert([
            'user_id' => '1',
            'resort_id' => '2',

        ]);
        DB::table('resort_user')->insert([
            'user_id' => '1',
            'resort_id' => '4',

        ]);
        DB::table('resort_user')->insert([
            'user_id' => '1',
            'resort_id' => '3',

        ]);
        DB::table('resort_user')->insert([
            'user_id' => '2',
            'resort_id' => '1',

        ]);

    }
}
