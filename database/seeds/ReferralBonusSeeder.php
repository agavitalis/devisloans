<?php

use Illuminate\Database\Seeder;

class ReferralBonusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('referral_bonuses')->insert([
            'bonus' => "1",
        ]);
    }
}
