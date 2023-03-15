<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use DateTime;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'よこやま',
            'email'=>'21ee438@haruka.otemon.ac.jp',
            'password'=>Hash::make('password'),
            'created_at'=>new DateTime(),
            'updated_at'=>new DateTIme(),
            'sum_play_time'=>'001500'//時間ってどうやって入れる？
            ]);
    }
}