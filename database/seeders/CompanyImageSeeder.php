<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanyImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('truncate table company_images');
        DB::table('company_images')->insert([
            ['img' => 'res/wallpaper_engine.png', 'link' => 'home/wallpaper_engine'],
            ['img' => 'res/pinterest.png', 'link' => 'home/pinterest'],
            ['img' => 'res/zedge.png', 'link' => 'home/zedge'],
            ['img' => 'res/icon.png', 'link' => 'home/wallpaper_life'],
            ['img' => 'res/instagramm.png', 'link' => 'home/instagram'],
            ['img' => 'res/Google.png', 'link' => 'home/google'],
        ]);
    }
}
