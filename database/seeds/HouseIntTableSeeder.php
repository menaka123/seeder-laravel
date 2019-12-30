<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HouseIntTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = DB::table('UserInt')->pluck('id')->toArray();

        //dd(array_rand($users));

        for($i=1; $i<50; $i++) {
            $id = array_rand($users);

            DB::table('HomeInt')->insert(
                ['user_id' => $users[$id], 'address' => "address$i"]
            );
        }
    }
}
