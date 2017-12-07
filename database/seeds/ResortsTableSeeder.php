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
            'last_snow' => '12/03/2017',
            'upper_snow' =>null,
            'lower_snow' =>null,
            'lifts_open' => '8',
            'img' => 'copper.png',
            'website' => 'http://www.coppercolorado.com/',
            'map' => 'ChIJje2Mxv5faocRGxb87e3-W8o',
            'zip' => 80443

        ]);
        DB::table('resorts')->insert([
            'name' => 'Paoli Peaks',
            'slug' => 'paoli-peaks',
            'location' => 'Paoli, Indiana',
            'open' => false,
            'conditions' => 'Closed',
            'new_snow_in' => '0.0',
            'last_snow' => '',
            'pct_open' => '0.0',
            'upper_snow' =>0.1,
            'lower_snow' =>0.0,
            'lifts_open' => '0',
            'img' => 'paoli.jpg',
            'website' => 'http://www.paolipeaks.com/',
            'map' => 'ChIJrWRDhyahbogRzpm8bG0R1Ew',
            'zip' => 47454

        ]);
        DB::table('resorts')->insert([
            'name' => 'SnowShoe',
            'slug' => 'showshoe',
            'location' => 'Snowshoe, West Virginia',
            'open' => true,
            'conditions' => 'Sunny',
            'new_snow_in' => '0.0',
            'last_snow' => '',
            'pct_open' => '15.0',
            'upper_snow' =>null,
            'lower_snow' =>null,
            'lifts_open' => '3/14',
            'img' => 'snowshoe.png',
            'website' => 'https://www.snowshoemtn.com/',
            'map' => 'ChIJmeNbQsdwS4gRvQIya65j8o8',
            'zip' => 24934

        ]);
        DB::table('resorts')->insert([
            'name' => 'Sugar Mountain',
            'slug' => 'sugar-mountain',
            'location' => 'Sugar Mountain, NC',
            'open' => true,
            'conditions' => 'Sunny',
            'new_snow_in' => '0.0',
            'last_snow' => '',
            'pct_open' => '23.8',
            'upper_snow' =>null,
            'lower_snow' =>null,
            'lifts_open' => '2/8',
            'img' => 'sugar.png',
            'website' => 'http://www.skisugar.com/',
            'map' => 'ChIJ8bC5VyztUIgRjOY8g-tB9mI',
            'zip' => 28604

        ]);
        DB::table('resorts')->insert([
            'name' => 'Big Sky Resort',
            'slug' => 'big-sky',
            'location' => 'Big Sky, Montana',
            'open' => true,
            'conditions' => 'Sunny',
            'last_snow' => '12/03/2017',
            'new_snow_in' => '2.0',
            'pct_open' => '19.7',
            'upper_snow' =>null,
            'lower_snow' =>null,
            'lifts_open' => '9/36',
            'img' => 'bigsky.jpg',
            'website' => 'https://bigskyresort.com/',
            'map' => 'ChIJNSw3_WUOUFMRyiuLqjtx-JU',
            'zip' => 59716
        ]);
        DB::table('resorts')->insert([
            'name' => 'Perfect North',
            'slug' => 'perfect-north',
            'location' => 'Lawrenceburg, Indiana',
            'open' => false,
            'conditions' => 'Cloudy',
            'last_snow' => '',
            'new_snow_in' => '0.0',
            'pct_open' => '0.0',
            'upper_snow' =>null,
            'lower_snow' =>null,
            'lifts_open' => '0/5',
            'img' => 'perfectnorth.png',
            'website' => 'https://perfectnorth.com/',
            'map' => 'ChIJ3-FGn0fUQYgR44dm92UDQHo',
            'zip' => 47025
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
            'lifts_open' => '24/32',
            'img' => 'valthorens.jpg',
            'website' => 'http://www.valthorens.com/en/home-page.1.html',
            'map' => 'ChIJcXAmAmCGiUcRM_PuwW28x44',
            'zip' => 61102
        ]);

        DB::table('resorts')->insert([
            'name' => 'Vail',
            'slug' => 'vail',
            'location' => 'Vail, Colorado',
            'open' => true,
            'conditions' => 'Clear',
            'new_snow_in' => '0.8',
            'last_snow' => '12/03/2017',
            'pct_open' => '1.0',
            'upper_snow' =>18.0,
            'lower_snow' =>10,
            'lifts_open' => '4/31',
            'img' => 'vail.jpg',
            'website' => 'https://www.vail.com/',
            'map' => 'ChIJB89dUQVwaocRxKOafh_AzMk',
            'zip' => 81657
        ]);
        DB::table('resorts')->insert([
            'name' => 'Steamboat Springs',
            'slug' => 'steamboat-springs',
            'location' => 'Steamboat Springs, Colorado',
            'open' => true,
            'conditions' => 'Powder, machine groomed',
            'new_snow_in' => '0.8',
            'last_snow' => '12/03/2017',
            'pct_open' => '3.6',
            'upper_snow' =>16,
            'lower_snow' =>10,
            'lifts_open' => '2/18',
            'img' => 'steamboat.png',
            'website' => 'https://www.steamboat.com/',
            'map' => 'ChIJYUZWCYF7QocRfc9uSNGjqBs',
            'zip' => 80487
        ]);
        DB::table('resorts')->insert([
            'name' => 'Keystone',
            'slug' => 'key-stone',
            'location' => 'Keystone, CO',
            'open' => true,
            'conditions' => 'Packed powder',
            'last_snow' => '12/03/2017',
            'new_snow_in' => '0.8',
            'pct_open' => '20',
            'upper_snow' =>16,
            'lower_snow' =>5,
            'lifts_open' => '8/20',
            'img' => 'keystone.jpg',
            'website' => 'https://www.keystoneresort.com/',
            'map' => 'ChIJg2V85yRXaocRYfovfYgMZ0M',
            'zip' => 80435
        ]);
        DB::table('resorts')->insert([
            'name' => 'Aspen Snowmass',
            'slug' => 'aspen-snowmass',
            'last_snow' => '12/03/2017',
            'location' => 'Snowmass Village, Colorado',
            'open' => true,
            'conditions' => 'Packed Powder',
            'new_snow_in' => '0.0',
            'pct_open' => '6.5',
            'upper_snow' =>9,
            'lower_snow' =>3,
            'lifts_open' => '8/43',
            'img' => 'aspen.jpg',
            'website' => 'https://www.aspensnowmass.com/',
            'map' => 'ChIJ1Wlr9XZIQIcRvaHyQxXwkXE',
            'zip' => 81615
        ]);
        DB::table('resorts')->insert([
            'name' => 'Mammoth Mountain',
            'slug' => 'mammoth-mountain',
            'last_snow' => '11/22/2017',
            'location' => 'Mammoth Lakes, California',
            'open' => true,
            'conditions' => 'Packed Powder',
            'new_snow_in' => '0.0',
            'pct_open' => '58',
            'upper_snow' =>20,
            'lower_snow' =>3,
            'lifts_open' => '14/28',
            'img' => 'mammoth.png',
            'website' => 'https://www.mammothmountain.com/',
            'map' => 'ChIJDZ70RiYNloARpK9pFMnaBVg',
            'zip' => 93546
        ]);


    }
}
