<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = factory(\App\Models\Categories::class)->times(5)->make();
        \App\Models\Categories::query()->insert($categories->toArray());
    }
}
