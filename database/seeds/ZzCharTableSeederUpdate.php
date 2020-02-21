<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZzCharTableSeederUpdate extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Access = DB::table('AccessChar')->orderBy('id', 'desc')->first();

        $status = ['o', 'c'];

        $st= array_rand($status);

        DB::table('AccessChar')->where('id', $Access->id)->update(
            [
                'status' => $status[$st]
            ]
        );
    }
}
