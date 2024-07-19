<?php
use App\Models\Filiere;
use App\Models\Etudiant;
use App\Models\Matiere;
use App\Models\Formateur;

function filiere($id)
{
    $filiere = Filiere::find($id);
    return $filiere;
}

function matiere($id)
{
    $matiere = Matiere::find($id);
    return $matiere;
}

function formateur($id)
{
    $formateur = Formateur::find($id);
    return $formateur;
}

function etudiant($id)
{
    $etudiant = Etudiant::find($id);
    return $etudiant;
}

