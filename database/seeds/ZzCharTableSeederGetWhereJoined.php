<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZzCharTableSeederGetWhereJoined extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Access = DB::table('AccessChar')
            ->join('UserChar', 'AccessChar.user_id', '=', 'UserChar.id')
            ->where('AccessChar.user_id', '0000025')
            ->get()
            ->toArray();


    }
}
