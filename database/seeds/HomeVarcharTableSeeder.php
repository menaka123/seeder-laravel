<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeVarcharTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = DB::table('UserVarchar')->pluck('id')->toArray();

        for($i=1; $i<50; $i++) {
            $id = array_rand($users);

            DB::table('HomeVarchar')->insert([
                    'id' => str_pad($i, 11,"0", STR_PAD_LEFT),
                    'user_id' => $users[$id],
                    'address' => "address$i"
                ]
            );
        }
    }
}
