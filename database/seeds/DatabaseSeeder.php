<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ProfsTableSeeder::class);
        $this->call(EtudiantsTableSeeder::class);
        $this->call(ClassesTableSeeder::class);
        $this->call(SeancesTableSeeder::class);
        $this->call(AbsencesTableSeeder::class);
    }
}
