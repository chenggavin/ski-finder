<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ResortsTableSeeder::class);
        $this->call(ResortUserTableSeeder::class);
        $this->call(ReviewsTableSeeder::class);
    }
}
