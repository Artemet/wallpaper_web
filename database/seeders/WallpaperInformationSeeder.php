<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WallpaperInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('truncate table wallpaper_information');
        DB::table('wallpaper_information')->insert([
            ['wallpaper_view' => 'a lot of cool video wallpapers', 'double_information' => 'Any wallpaper to your taste, paid, free.', 'img' => 'res/purple_sky.png'],
            ['wallpaper_view' => 'a lot of wallpapers for your device', 'double_information' => 'Your eys will be happy', 'img' => 'res/circle_wallpaper.jpg'],
            ['wallpaper_view' => 'a lot of colors for your wallpapers', 'double_information' => 'A lot of cool colors', 'img' => 'res/colors.png'],
            ['wallpaper_view' => 'a lot of cool gif wallpapers', 'double_information' => 'gif and video wallpapers', 'img' => 'res/gif_sea.gif'],
            ['wallpaper_view' => 'very good download quality', 'double_information' => 'good quality', 'img' => 'res/4k.jpg'],
            ['wallpaper_view' => 'good payment methods', 'double_information' => 'according to our users', 'img' => 'res/money.jpeg'],
        ]);
    }
}
