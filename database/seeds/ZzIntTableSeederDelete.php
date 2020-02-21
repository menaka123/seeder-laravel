<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZzIntTableSeederDelete extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Access = DB::table('AccessInt')->orderBy('id', 'desc')->first();

        DB::table('AccessInt')->delete($Access->id);
    }
}
