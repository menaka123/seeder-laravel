<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZzCharTableSeederDelete extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Access = DB::table('AccessChar')->orderBy('id', 'desc')->first();

        DB::table('AccessChar')->delete($Access->id);
    }
}
