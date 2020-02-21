<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserVarcharTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<50; $i++) {
            $phone = [$i, null];
            DB::table('UserVarchar')->insert([
                    'id' => str_pad($i, 11,"0", STR_PAD_LEFT),
                    'name' => "user$i",
                    'email' => "email$i",
                    'phone' => $phone[array_rand($phone)]
                ]
            );
        }
    }
}
