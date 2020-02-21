<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZzVarcharTableSeederDelete extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Access = DB::table('AccessVarchar')->orderBy('id', 'desc')->first();

        DB::table('AccessVarchar')->delete($Access->id);
    }
}
