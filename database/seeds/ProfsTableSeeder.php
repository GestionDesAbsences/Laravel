<?php

use Illuminate\Database\Seeder;
use App\Prof;
class ProfsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Prof::class,5)->create();
    }
}
