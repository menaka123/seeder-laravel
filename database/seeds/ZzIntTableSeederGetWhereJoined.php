<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZzIntTableSeederGetWhereJoined extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Access = DB::table('AccessInt')
            ->join('UserInt', 'AccessInt.user_id', '=', 'UserInt.id')
            ->where('AccessInt.user_id', 25)
            ->get()
            ->toArray();


    }
}
