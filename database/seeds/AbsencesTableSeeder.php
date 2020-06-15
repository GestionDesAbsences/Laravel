<?php

use Illuminate\Database\Seeder;
use App\Absence;
class AbsencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Absence::class,50)->create();
    }
}
