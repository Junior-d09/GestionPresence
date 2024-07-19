<?php

namespace App\Http\Controllers;

use App\Models\Presence;
use App\Models\Etudiant;
use Illuminate\Http\Request;

class PresenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $presences = Presence::all();
        return view('admin/pages/index1', compact('presences'));
    }

    public function presence(Etudiant $etudiant)
    {
        Etudiant::create([
            'etudiant_id'->$etudiant->etudiant_id,
            'num_matri'->$etudiant->num_matri,
            'date'->$etudiant->date,
            'name'->$etudiant->name,
            'heure'->$etudiant->heure,
            'profession'->$etudiant->profession,
        ]);
    }

    public function presence1(Formateur $formateur)
    {
        Formateur::create([
            'formateur_id'->$formateur->formateur_id,
            'num_matri'->$formateur->num_matri,
            'date'->$formateur->date,
            'name'->$formateur->name,
            'heure'->$formateur->heure,
            'profession'->$formateur->profession,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Presence $presence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Presence $presence)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Presence $presence)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Presence $presence)
    {
        //
    }
}
