<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZzVarcharTableSeederGetWhereJoined extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Access = DB::table('AccessVarchar')
            ->join('UserVarchar', 'AccessVarchar.user_id', '=', 'UserVarchar.id')
            ->where('AccessVarchar.user_id', '0000025')
            ->get()
            ->toArray();


    }
}
