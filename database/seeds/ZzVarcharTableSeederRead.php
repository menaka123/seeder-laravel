<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZzVarcharTableSeederRead extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Access = DB::table('AccessVarchar')->orderBy('id', 'desc')->first();

    }
}
