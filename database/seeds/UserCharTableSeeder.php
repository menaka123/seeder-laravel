<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserCharTableSeeder extends Seeder
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

            DB::table('UserChar')->insert([
                    'id' => str_pad($i, 7,"0", STR_PAD_LEFT),
                    'name' => "user$i",
                    'email' => "email$i",
                    'phone' => $phone[array_rand($phone)]
                ]
            );
        }
    }
}
