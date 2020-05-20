<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class InvestorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('investors')->insert([
            'user' => "2",
            'series' => "1",
            'date_invested' => Carbon::now()->format('Y-m-d H:i:s'),
            'date_cashout' => Carbon::now()->format('Y-m-d H:i:s'),
            'amount_invested' => "1000000",
            'rate' => "2",
            'roi' => "2",
            'maintenace_fee' => "2.5",
            'withdrawable_bal' => "2.5",
            'cashout_request' => "1",
            'cashout_mode' => "0",
            'withdrawable_bal' => "1000000",
            'fully_merged' => "0",
            'request_status' => "0",
           
        ]);

        DB::table('investors')->insert([
            'user' => "3",
            'series' => "1",
            'date_invested' => Carbon::now()->format('Y-m-d H:i:s'),
            'date_cashout' => Carbon::now()->format('Y-m-d H:i:s'),
            'amount_invested' => "1000000",
            'rate' => "2",
            'roi' => "2",
            'maintenace_fee' => "2.5",
            'withdrawable_bal' => "2.5",
            'cashout_request' => "1",
            'cashout_mode' => "0",
            'withdrawable_bal' => "2.5",
            'fully_merged' => "0",
            'request_status' => "0",
           
        ]);
    }
}
