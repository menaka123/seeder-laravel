<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TableCreateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::statement("Drop table `AccessChar`");
        DB::statement("Drop table `AccessInt`");
        DB::statement("Drop table `AccessVarchar`");
        DB::statement("Drop table `HomeVarchar`");
        DB::statement("Drop table `HomeInt`");
        DB::statement("Drop table `HomeChar`");
        DB::statement("Drop table `UserVarchar`");
        DB::statement("Drop table `UserInt`");
        DB::statement("Drop table `UserChar`");


        DB::statement("CREATE TABLE `UserVarchar` (
            `id` varchar(11) NOT NULL DEFAULT '',
          `name` varchar(50) DEFAULT NULL,
          `email` varchar(100) DEFAULT NULL,
          `phone` varchar(10) DEFAULT NULL,
          PRIMARY KEY (`id`)
        )");

         DB::statement("CREATE TABLE `UserInt` (
          `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
          `name` varchar(50) DEFAULT NULL,
          `email` varchar(100) DEFAULT NULL,
          `phone` int(10) DEFAULT NULL,
          PRIMARY KEY (`id`)
        )");

         DB::statement("CREATE TABLE `UserChar` (
          `id` char(11) NOT NULL DEFAULT '',
          `name` varchar(50) DEFAULT NULL,
          `email` varchar(100) DEFAULT NULL,
          `phone` char(10) DEFAULT NULL,
          PRIMARY KEY (`id`)
        )");

         DB::statement("CREATE TABLE `HomeVarchar` (
          `id` varchar(11) NOT NULL DEFAULT '',
          `user_id` varchar(11) DEFAULT NULL,
          `address` varchar(500) DEFAULT NULL,
          PRIMARY KEY (`id`),
          KEY `user_id` (`user_id`),
          CONSTRAINT `homevarchar_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `UserVarchar` (`id`)
        )");

          DB::statement("CREATE TABLE `HomeInt` (
          `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
          `user_id` int(11) unsigned NOT NULL,
          `address` varchar(500) DEFAULT NULL,
          PRIMARY KEY (`id`),
          KEY `user_id` (`user_id`),
          CONSTRAINT `homeint_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `UserInt` (`id`)
        ) ");

          DB::statement("CREATE TABLE `HomeChar` (
          `id` char(7) NOT NULL DEFAULT '',
          `user_id` char(7) DEFAULT NULL,
          `address` varchar(500) DEFAULT NULL,
          PRIMARY KEY (`id`),
          KEY `user_id` (`user_id`),
          CONSTRAINT `homechar_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `UserChar` (`id`)
        )");

          DB::statement("CREATE TABLE `AccessChar` (
          `id` char(7) NOT NULL DEFAULT '',
          `user_id` char(7) NOT NULL DEFAULT '',
          `home_id` char(7) NOT NULL DEFAULT '',
          `status` char(1) DEFAULT NULL,
          `phone` char(10) DEFAULT NULL,
          PRIMARY KEY (`id`),
          KEY `user_id` (`user_id`),
          KEY `home_id` (`home_id`),
          CONSTRAINT `accesschar_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `UserChar` (`id`),
          CONSTRAINT `accesschar_ibfk_2` FOREIGN KEY (`home_id`) REFERENCES `HomeChar` (`id`)
        )");

          DB::statement("CREATE TABLE `AccessInt` (
          `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
          `user_id` int(11) unsigned NOT NULL,
          `home_id` int(11) unsigned NOT NULL,
          `status` char(1) DEFAULT NULL,
          `phone` int(10) DEFAULT NULL,
          PRIMARY KEY (`id`),
          KEY `user_id` (`user_id`),
          KEY `home_id` (`home_id`),
          CONSTRAINT `accessint_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `UserInt` (`id`),
          CONSTRAINT `accessint_ibfk_2` FOREIGN KEY (`home_id`) REFERENCES `HomeInt` (`id`)
        )");

          DB::statement("CREATE TABLE `AccessVarchar` (
          `id` varchar(11) NOT NULL DEFAULT '',
          `user_id` varchar(11) NOT NULL DEFAULT '',
          `home_id` varchar(11) NOT NULL DEFAULT '',
          `status` char(1) DEFAULT NULL,
          `phone` char(10) DEFAULT NULL,
          PRIMARY KEY (`id`),
          KEY `user_id` (`user_id`),
          KEY `home_id` (`home_id`),
          CONSTRAINT `accessvarchar_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `UserVarchar` (`id`),
          CONSTRAINT `accessvarchar_ibfk_2` FOREIGN KEY (`home_id`) REFERENCES `HomeVarchar` (`id`)
        )");
    }
}
