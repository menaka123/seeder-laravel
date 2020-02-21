<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZzIntTableSeederCreate extends Seeder
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

        $st= array_rand($status);
        $id = array_rand($users);

        $AccessId =  DB::table('AccessInt')->orderBy('id', 'desc')->first();

        DB::table('AccessInt')->insert(
            [
                'id' => $AccessId->id + 1,
                'user_id' => $users[$id]->id,
                'home_id' => $users[$id]->home_id,
                'status' => $status[$st]
            ]
        );
    }
}
