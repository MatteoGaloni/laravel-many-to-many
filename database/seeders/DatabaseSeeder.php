<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        // inserisci prima il tipo
        $this->call([
            TypeSeeder::class,
            ProjectSeeder::class,
            TechnologySeeder::class,
        ]);
    }
}
