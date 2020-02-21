<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccessVarCharTableSeeder extends Seeder
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

        for($i=1; $i<env('REC_COUNT'); $i++) {
            $st= array_rand($status);
            $id = array_rand($users);

            $phone = [rand(1, 50), null];

            DB::table('AccessVarchar')->insert(
                [
                    'id' => str_pad($i, 11,"0", STR_PAD_LEFT),
                    'user_id' => $users[$id]->id,
                    'home_id' => $users[$id]->home_id,
                    'status' => $status[$st],
                    'phone' => $phone[array_rand($phone)]
                ]
            );
        }
    }
}
