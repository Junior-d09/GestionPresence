<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Filiere;

class FiliereTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Filiere::create(['label'=>"GISE"]);
       Filiere::create(['label'=>"GLR"]);
       Filiere::create(['label'=>"TRM"]);
       Filiere::create(['label'=>"GEP"]);
       Filiere::create(['label'=>"SIEC"]);
    }
}
