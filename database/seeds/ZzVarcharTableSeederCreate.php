<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZzVarcharTableSeederCreate extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = DB::table('UserVarchar')
            ->select(
                'UserVarchar.*', 'HomeVarchar.id as home_id'
            )
            ->join('HomeVarchar', 'UserVarchar.id', '=', 'HomeVarchar.user_id')
            ->get()
            ->toArray();

        $status = ['o', 'c'];

        $st= array_rand($status);
        $id = array_rand($users);

        $AccessId =  DB::table('AccessVarchar')->orderBy('id', 'desc')->first();

        DB::table('AccessVarchar')->insert(
            [
                'id' => $AccessId->id + 1,
                'user_id' => $users[$id]->id,
                'home_id' => $users[$id]->home_id,
                'status' => $status[$st]
            ]
        );
    }
}
