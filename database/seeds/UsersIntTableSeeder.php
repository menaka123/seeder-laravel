<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersIntTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for($i=1; $i<50; $i++) {
            DB::table('UserInt')->insert(
                ['name' => "user$i", 'email' => "email$i"]
            );
        }
    }
}
