<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccessCharTableSeeder extends Seeder
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

        for($i=1; $i<env('REC_COUNT'); $i++) {
            $st= array_rand($status);
            $id = array_rand($users);

            DB::table('AccessChar')->insert(
                [
                    'id' => str_pad($i, 7,"0", STR_PAD_LEFT),
                    'user_id' => $users[$id]->id,
                    'home_id' => $users[$id]->home_id,
                    'status' => $status[$st]
                ]
            );
        }
    }
}
