<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $types = Type::all();

        for ($i = 0; $i < 10; $i++) {
            $newProject = new Project();
            $newProject->title = $faker->name();
            $newProject->description = $faker->text(50);
            $newProject->img = $faker->imageUrl(800, 600, 'nature');
            // $newProject->type_id = $faker->randomElements();
            // $newproject->type_id = $types->random()->id;
            $newProject->type_id = rand(1, count($types));
            $newProject->save();
        }
    }
}
