<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AchievementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('truncate table achievements');
        DB::table('achievements')->insert([
            ['achievement' => 'many positive comments', 'achievement_information' => 'every week', 'achievement_img' => 'res/space.jpg'],
            ['achievement' => 'first clients', 'achievement_information' => 'we are ready to see you on wallpaper life', 'achievement_img' => 'res/purple_view.jpg'],
            ['achievement' => 'early days of the site', 'achievement_information' => 'we have many wallpapers', 'achievement_img' => 'res/winter_night.jpg'],
        ]);
    }
}
