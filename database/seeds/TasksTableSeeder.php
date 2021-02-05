<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // faker使う(引数には日本語を設定している)
        $faker = \Faker\Factory::create('ja_JP');

        // タスクの作成
        \App\Models\Task::create([
            'title' => '一番乗り！',
            'comment' => '初投稿です！',
            'setting_day' => $faker->dateTimeBetween('-1month', '+1month'),
            'user_id' => $faker->numberBetween(1, 5),
        ]);
    }
}
