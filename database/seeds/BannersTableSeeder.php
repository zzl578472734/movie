<?php

use Illuminate\Database\Seeder;

class BannersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $banners = factory(\App\Models\Banners::class)->times(5)->make();
        \App\Models\Banners::query()->insert($banners->toArray());
    }
}
