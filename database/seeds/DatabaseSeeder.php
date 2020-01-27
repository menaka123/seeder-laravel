<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TableCreateSeeder::class);
        $this->call(UserVarcharTableSeeder::class);
        $this->call(UsersIntTableSeeder::class);
        $this->call(UserCharTableSeeder::class);
        $this->call(HouseIntTableSeeder::class);
        $this->call(HomeVarcharTableSeeder::class);
        $this->call(HomeCharTableSeeder::class);

        $this->call(AccessCharTableSeeder::class);
        $this->call(AccessVarCharTableSeeder::class);
        $this->call(AccessIntTableSeeder::class);
    }
}
