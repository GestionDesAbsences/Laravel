<?php

use Illuminate\Database\Seeder;
use App\Seance;
class SeancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Seance::class,50)->create();
    }
}
