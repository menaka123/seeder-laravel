<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZzCharTableSeederCreate extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = DB::table('UserChar')
            ->select(
                'UserChar.*', 'HomeChar.id as home_id'
            )
            ->join('HomeChar', 'UserChar.id', '=', 'HomeChar.user_id')
            ->get()
            ->toArray();

        $status = ['o', 'c'];

        $st= array_rand($status);
        $id = array_rand($users);

        $AccessId =  DB::table('AccessChar')->orderBy('id', 'desc')->first();

        DB::table('AccessChar')->insert(
            [
                'id' => $AccessId->id + 1,
                'user_id' => $users[$id]->id,
                'home_id' => $users[$id]->home_id,
                'status' => $status[$st]
            ]
        );
    }
}
