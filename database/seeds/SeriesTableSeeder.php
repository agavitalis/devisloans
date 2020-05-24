<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class SeriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('series')->insert([
            'series_name' => "Freelancer",
            'amount' => "3000",
            'interest_rate' => "5.3571",
            'total_interest' => "75",
            'duration'=>"14",
            'maintenance_fee'=>"25",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            
        ]);


        DB::table('series')->insert([
            'series_name' => "Premium",
            'amount' => "10000",
            'interest_rate' => "5.3571",
            'total_interest' => "75",
            'duration'=>"14",
            'maintenance_fee'=>"25",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            
        ]);

        DB::table('series')->insert([
            'series_name' => "Premium Gold",
            'amount' => "15000",
            'interest_rate' => "5.3571",
            'total_interest' => "75",
            'duration'=>"14",
            'maintenance_fee'=>"25",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
           
        ]);
    }
}
