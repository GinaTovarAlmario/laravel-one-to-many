<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Functions\Helpers;
use App\Models\Project;
use App\Models\Type;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $arrayData = Helpers::getCsv( __DIR__ . "/list-projects.csv");
        // vado a prendere i diversi type che ho a disposizione
        $typeIds = Type::all()->pluck('id');

        foreach($arrayData as $indice => $riga){
            if($indice ==! 0){
                $newProject = new Project();
                $newProject->title = $riga[0];
                $newProject->author = $riga[1];
                $newProject->description = $faker->text();
                $newProject->date = $riga[3];
                $newProject->status = $riga[4];
                $newProject->save();
            }
        }
    }
}
