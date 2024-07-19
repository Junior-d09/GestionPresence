<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Matiere;


class MatiereTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Matiere::create(['label'=>"HTML-CSS"]);
        Matiere::create(['label'=>"LARAVEL"]);
        Matiere::create(['label'=>"RESEAU"]);
        Matiere::create(['label'=>"BASE DE DONNEES"]);
        Matiere::create(['label'=>"PHP"]);
        Matiere::create(['label'=>"CAMERA DE SURVEILLANCE" ]);
    }
}
