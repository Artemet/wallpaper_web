<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WallpaperThemesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('truncate table wallpaper_themes');
        DB::table('wallpaper_themes')->insert([
            ['theme_link' => '#', 'theme_name' => 'game', 'theme_information' => 'choose gaming wallpapers', 'theme_img' => 'res/gta5.jpg'],
            ['theme_link' => '#', 'theme_name' => 'view', 'theme_information' => 'let your eyes delight in beautiful views', 'theme_img' => 'res/view2.jpg'],
            ['theme_link' => '#', 'theme_name' => 'cars', 'theme_information' => 'technology lovers here', 'theme_img' => 'res/mcclaren.jpg'],
            ['theme_link' => '#', 'theme_name' => 'anime', 'theme_information' => 'very cool wallpapers with anime', 'theme_img' => 'res/Anime.jpg'],
            ['theme_link' => '#', 'theme_name' => 'company', 'theme_information' => 'get motivated with wallpapers', 'theme_img' => 'res/razer_company.gif'],
            ['theme_link' => '#', 'theme_name' => 'fon', 'theme_information' => 'have a nice view on your wallpaper', 'theme_img' => 'res/rain.jpeg'],
            ['theme_link' => '#', 'theme_name' => 'technology', 'theme_information' => 'have a nice view of any technology', 'theme_img' => 'res/pc.jpg'],
            ['theme_link' => '#', 'theme_name' => 'gif', 'theme_information' => 'enjoy with gif wallpaper', 'theme_img' => 'res/space.gif'],
            ['theme_link' => '#', 'theme_name' => 'cartoon', 'theme_information' => 'we have any cartoon wallpapers on your choice', 'theme_img' => 'res/mouse.jpg'],
            ['theme_link' => '#', 'theme_name' => 'nft', 'theme_information' => 'click here to see nft wallpapers', 'theme_img' => 'res/nft.jpg'],
        ]);
    }
}
