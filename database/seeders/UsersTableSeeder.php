<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr=[
            'user_name'=>'admin',
            'user_pass'=>md5(1),
            'user_level'=>1
        ];
        DB::table('users')->insert($arr);
    }
}