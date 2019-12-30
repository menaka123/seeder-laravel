<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccessIntTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = DB::table('UserInt')
            ->select(
                'UserInt.*', 'HomeInt.id as home_id'
            )
            ->join('HomeInt', 'UserInt.id', '=', 'HomeInt.user_id')
            ->get()
            ->toArray();

        $status = ['o', 'c'];

        for($i=1; $i< env('REC_COUNT'); $i++) {
            $st= array_rand($status);
            $id = array_rand($users);

            DB::table('AccessInt')->insert(
                [
                    'user_id' => $users[$id]->id,
                    'home_id' => $users[$id]->home_id,
                    'status' => $status[$st]
                ]
            );
        }
    }
}
