<?php

use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = factory(\App\Models\Movies::class)->times(50)->make();
        \App\Models\Movies::query()->insert($movies->toArray());
    }
}
