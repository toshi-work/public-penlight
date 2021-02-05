<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ユーザの作成
        \App\Models\User::create([
            'name' => 'test0',
            'email' => 'test0@test.co.jp',
            'password' => Hash::make("test1234"),
            'prefecture' => '兵庫県',
            'memo'  => 'test0です。よろしく！'
        ]);

        // レコード4件分出力
        for($i=1; $i < 5; $i++){
            // ユーザの作成
            \App\Models\User::create([
                'name' => 'test'.$i,
                'email' => 'test'.$i.'@test.co.jp',
                'password' => Hash::make("test1234"),
                'prefecture' => '大阪府',
                'memo'  => 'test'.$i.'です。よろしく！'
            ]);
        }
    }
}
