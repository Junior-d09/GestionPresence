<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Presence;


class PresenceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Presence::create(['num_matri'=>'J59KyK8s2X', 'date'=> '2024-06-10', 'name'=> 'SOSSOU Pivot', 'heure'=> '08:00',   'profession'=>'Formateur', 'etudiant_id'=>'1',  'formateur_id'=>'1']);
       Presence::create(['num_matri'=>'9taH8yTfJL', 'date'=> '2024-07-11', 'name'=> 'Junior DOFONSOU', 'heure'=> '07:50',  'profession'=>'etudiant', 'etudiant_id'=>'1',  'formateur_id'=>'1']);
    }
}
