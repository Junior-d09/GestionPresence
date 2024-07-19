<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use Illuminate\Http\Request;

class FiliereController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filieres = Filiere::All();
        return view('admin/filieres/index', compact( 'filieres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/filieres/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'label' => 'required|string',
        ]);
        Filiere::create([
            'label'=>$request->label
        ]);
        session()->flash('success', "Nouveau filiere ajouter avec succès");
        return redirect()->route('filiere.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Filiere $filiere)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Filiere $filiere)
    {
        return view('admin/filieres/edit', compact( "filiere"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Filiere $filiere)
    {
        $filiere->update([
            'label' => $request->label
        ]);
        session()->flash('warning', "La filiere a été bien modifié");
        return redirect()->route('filiere.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Filiere $filiere)
    {
        $filiere->etudiants()->delete();
        $filiere -> delete();
        session()->flash('danger', "La filiere a été bien supprimer");
        return redirect()->route('filiere.index');
    }
}
