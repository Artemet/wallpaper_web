<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('truncate table payment_methods');
        DB::table('payment_methods')->insert([
            ["pay_img" => "res/мир.png"],
            ["pay_img" => "res/master_card.png"],
            ["pay_img" => "res/visa.jpeg"],
            ["pay_img" => "res/qiwi.png"],
            ["pay_img" => "res/yomoney.png"],
        ]);
    }
}
