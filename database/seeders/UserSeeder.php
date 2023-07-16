<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newUser = new User();
        $newUser->name = 'matteo';
        $newUser->email = 'matteo@gmail.com';
        $newUser->password = '$2y$10$wwrSLcnxe4dPHab4KlmY7uRIKuAdn0z2LKr';
        // $newUser->save();
    }
}
