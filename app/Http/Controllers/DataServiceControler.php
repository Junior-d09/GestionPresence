<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
use App\Models\Formateur;
use App\Models\Filiere;

class DataServiceControler extends Controller
{
    public function index()
    {
        $nbrEtu = count(Etudiant::all());
        $nbrFor = count(Formateur::all());
        $filieres = Filiere::orderBy();
        return view('dashboard', compact ('nbrEtu','nbrFor','nbrfil')); 
    }

   
}
