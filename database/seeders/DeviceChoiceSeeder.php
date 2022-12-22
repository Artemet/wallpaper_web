<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeviceChoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('truncate table device_choices');
        DB::table('device_choices')->insert([
            ['device_link' => 'home/phone', 'device_img' => 'res/phone.png', 'device_name' => 'phone', 'device_sub' => 'NIGA SUB1'],
            ['device_link' => 'home/tablet', 'device_img' => 'res/tablet.png', 'device_name' => 'tablet', 'device_sub' => 'NIGA SUB2'],
            ['device_link' => 'home/computer', 'device_img' => 'res/computer.png', 'device_name' => 'computer', 'device_sub' => 'NIGA SUB3'],
            ['device_link' => 'home/laptop', 'device_img' => 'res/laptop.png', 'device_name' => 'laptop', 'device_sub' => 'NIGA SUB4'],
            ['device_link' => 'home/all_wallpaper', 'device_img' => 'res/cross.png', 'device_name' => 'no filter', 'device_sub' => 'NIGA SUB5'],
        ]);
    }
}
