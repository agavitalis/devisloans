<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => "Devis",
            'last_name' => "Admin",
            'email' => "admin@devisloans.com",
            'password' => bcrypt('admin@devisloans123'),
            'user_role'=>"admin",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'email_verified_at'=>"2019-09-07 08:42:38"
        ]);

        DB::table('users')->insert([
            'first_name' => "Ogbonna",
            'last_name' => "Vitalis",
            'email' => "agavitalisogbonna@gmail.com",
            'password' => bcrypt('08032647672'),
            'user_role'=>"user",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'email_verified_at'=>"2019-09-07 08:42:38"
        ]);

        DB::table('users')->insert([
            'first_name' => "Vivvaa",
            'last_name' => "Vivvaa",
            'email' => "vivvaa.vivvaa@gmail.com",
            'password' => bcrypt('08032647672'),
            'user_role'=>"user",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'email_verified_at'=>"2019-09-07 08:42:38"
        ]);

       
        DB::table('users')->insert([
            'first_name' => "Luvion",
            'last_name' => "User",
            'email' => "user@devisloans.com",
            'password' => bcrypt('user@devisloans123'),
            'user_role'=>"user",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'email_verified_at'=>"2019-09-07 08:42:38"
        ]);

    }
}
