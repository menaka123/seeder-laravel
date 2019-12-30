<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeCharTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = DB::table('UserChar')->pluck('id')->toArray();

        for($i=1; $i<50; $i++) {
            $id = array_rand($users);

            DB::table('HomeChar')->insert([
                    'id' => str_pad($i, 7,"0", STR_PAD_LEFT),
                    'user_id' => $users[$id],
                    'address' => "address$i"
                ]
            );
        }
    }
}
