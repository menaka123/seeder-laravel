<?php

use Illuminate\Database\Seeder;

class ZzzDatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ZzCharTableSeederCreate::class);
        $this->call(ZzCharTableSeederUpdate::class);
        $this->call(ZzCharTableSeederRead::class);
        $this->call(ZzCharTableSeederDelete::class);
        $this->call(ZzCharTableSeederGetWhereJoined::class);
        //select * from AccessChar;
        //select COUNT(*)  from AccessChar;
        //SELECT * FROM AccessChar INNER JOIN UserChar ON AccessChar.user_id=UserChar.id; // INNER JOIN
        //SELECT * FROM AccessChar LEFT JOIN UserChar ON AccessChar.user_id = UserChar.id; // LEFT JOIN
        //SELECT * FROM AccessChar RIGHT JOIN UserChar ON AccessChar.user_id = UserChar.id; // RIGHT JOIN
        //SELECT * FROM AccessChar LEFT JOIN UserChar ON AccessChar.phone = UserChar.phone WHERE UserChar.phone is NULL; // LEFT JOIN OUT
        //SELECT * FROM AccessChar RIGHT JOIN UserChar ON AccessChar.phone = UserChar.phone WHERE AccessChar.phone is NULL; // RIGHT JOIN OUT
        //SELECT * FROM AccessChar LEFT JOIN UserChar ON AccessChar.phone = UserChar.phone UNION SELECT * FROM AccessChar RIGHT JOIN UserChar ON AccessChar.phone = UserChar.phone; // FULL OUTER JOIN
        //SELECT * FROM AccessChar LEFT JOIN UserChar ON AccessChar.phone = UserChar.phone WHERE UserChar.phone is NULL UNION SELECT * FROM AccessChar RIGHT JOIN UserChar ON AccessChar.phone = UserChar.phone WHERE AccessChar.phone is NULL; // FULL OUTER JOIN OUT
        //SELECT * FROM AccessChar CROSS JOIN UserChar; //Cross JOIN

        $this->call(ZzVarcharTableSeederCreate::class);
        $this->call(ZzVarcharTableSeederUpdate::class);
        $this->call(ZzVarcharTableSeederRead::class);
        $this->call(ZzVarcharTableSeederDelete::class);
        $this->call(ZzVarcharTableSeederGetWhereJoined::class);
        //select * from AccessVarchar;
        //select COUNT(*)  from AccessVarchar;
        //SELECT * FROM AccessVarchar INNER JOIN UserVarchar ON AccessVarchar.user_id=UserVarchar.id; // INNER JOIN
        //SELECT * FROM AccessVarchar LEFT JOIN UserVarchar ON AccessVarchar.user_id = UserVarchar.id; // LEFT JOIN
        //SELECT * FROM AccessVarchar RIGHT JOIN UserVarchar ON AccessVarchar.user_id = UserVarchar.id; // RIGHT JOIN
        //SELECT * FROM AccessVarchar LEFT JOIN UserVarchar ON AccessVarchar.phone = UserVarchar.phone WHERE UserVarchar.phone is NULL; // LEFT JOIN OUT
        //SELECT * FROM AccessVarchar RIGHT JOIN UserVarchar ON AccessVarchar.phone = UserVarchar.phone WHERE AccessVarchar.phone is NULL; // RIGHT JOIN OUT
        //SELECT * FROM AccessVarchar LEFT JOIN UserVarchar ON AccessVarchar.phone = UserVarchar.phone UNION SELECT * FROM AccessVarchar RIGHT JOIN UserVarchar ON AccessVarchar.phone = UserVarchar.phone; // FULL OUTER JOIN
        //SELECT * FROM AccessVarchar LEFT JOIN UserVarchar ON AccessVarchar.phone = UserVarchar.phone WHERE UserVarchar.phone is NULL UNION SELECT * FROM AccessVarchar RIGHT JOIN UserVarchar ON AccessVarchar.phone = UserVarchar.phone WHERE AccessVarchar.phone is NULL; // FULL OUTER JOIN OUT
        //SELECT * FROM AccessVarchar CROSS JOIN UserVarchar; //Cross JOIN


        $this->call(ZzIntTableSeederCreate::class);
        $this->call(ZzIntTableSeederUpdate::class);
        $this->call(ZzIntTableSeederRead::class);
        $this->call(ZzIntTableSeederDelete::class);
        $this->call(ZzIntTableSeederGetWhereJoined::class);
        //select * from AccessInt;
        //select COUNT(*)  from AccessInt;
        //SELECT * FROM AccessInt INNER JOIN UserInt ON AccessInt.user_id=UserInt.id; // INNER JOIN
        //SELECT * FROM AccessInt LEFT JOIN UserInt ON AccessInt.user_id = UserInt.id; // LEFT JOIN
        //SELECT * FROM AccessInt RIGHT JOIN UserInt ON AccessInt.user_id = UserInt.id; // RIGHT JOIN
        //SELECT * FROM AccessInt LEFT JOIN UserInt ON AccessInt.phone = UserInt.phone WHERE UserInt.phone is NULL; // LEFT JOIN OUT
        //SELECT * FROM AccessInt RIGHT JOIN UserInt ON AccessInt.phone = UserInt.phone WHERE AccessInt.phone is NULL; // RIGHT JOIN OUT
        //SELECT * FROM AccessInt LEFT JOIN UserInt ON AccessInt.phone = UserInt.phone UNION SELECT * FROM AccessInt RIGHT JOIN UserInt ON AccessInt.phone = UserInt.phone; // FULL OUTER JOIN
        //SELECT * FROM AccessInt LEFT JOIN UserInt ON AccessInt.phone = UserInt.phone WHERE UserInt.phone is NULL UNION SELECT * FROM AccessInt RIGHT JOIN UserInt ON AccessInt.phone = UserInt.phone WHERE AccessInt.phone is NULL; // FULL OUTER JOIN OUT
        //SELECT * FROM AccessInt CROSS JOIN UserInt; //Cross JOIN
    }
}
