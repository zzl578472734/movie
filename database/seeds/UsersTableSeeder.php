<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 批量生成用户数据
     * @return void
     */
    public function run()
    {
        $users = factory(\App\Models\User::class)->times(50)->make();
        \App\Models\User::query()->insert($users->toArray());
    }
}
