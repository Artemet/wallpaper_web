<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('truncate table about_us');
        DB::table('about_us')->insert([
            ['about_us_text' => 'a lot of cool wallpapers', 'about_us_img' => 'res/icon.png'],
            ['about_us_text' => 'huge selection', 'about_us_img' => 'res/ball.gif'],
            ['about_us_text' => 'many happy visitors', 'about_us_img' => 'res/ball2.gif'],
            ['about_us_text' => 'free and paid wallpapers', 'about_us_img' => 'res/house.gif'],
        ]);
    }
}
