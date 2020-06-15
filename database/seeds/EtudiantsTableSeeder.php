<?php

use Illuminate\Database\Seeder;
use App\Etudiant;
class EtudiantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Etudiant::class,5)->create();
    }
}
