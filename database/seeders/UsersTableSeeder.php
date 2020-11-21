<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    const FIRST_NAME_ARRAY  = [
        'James','Mary','John','Patricia','Robert','Jennifer','Michael','Linda','William','David'
    ];
    const FAMILY_NAME_ARRAY  = [
        'Smith','Johnson','Brown','Jones','Garcia','Miller','Michael','Davis','Jackson','Willson'
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 作成するレコード数
        $count = 10;

        for ($i = 0; $i < $count; $i++)
        {
            // ランダムな名前を生成する
            $first_name = self::FIRST_NAME_ARRAY[array_rand(self::FIRST_NAME_ARRAY)];
            $family_name = self::FAMILY_NAME_ARRAY[array_rand(self::FAMILY_NAME_ARRAY)];

            $param = [
                'name' => "{$first_name} {$family_name}",
                'email' => "{$first_name}{$family_name}@hogehoge.com",
                'password' => 'password',
            ];
            \DB::table('users')->insert($param);
        }
    }
}
