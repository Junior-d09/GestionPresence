<?php

namespace App\Http\Controllers;

use App\Models\FiliereMatiere;
use App\Models\Formateur;
use App\Models\Matiere;
use App\Models\Filiere;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $programs = FiliereMatiere::all();
        return view('admin/programs/index', compact('programs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $programe = Matiere:: All();
        $programs = Formateur:: All();
        $program = Filiere:: All();
        return view('admin/programs/create', compact('programe', 'programs', 'program'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        FiliereMatiere::create([
        'date_deb'=>$request->date_deb,
        'date_fin'=>$request->date_fin,
        'matiere_id'=>$request->matiere_id,
        'formateur_id'=>$request->formateur_id,
        'sale'=>$request->sale,
        'filiere_id'=>$request->filiere_id,
        ]);
        session()->flash('success', "Nouveau programme ajouté avec succès");
        return redirect()->route('program.index');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(FiliereMatiere $filiere_matiere)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FiliereMatiere $filiere_matiere)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FiliereMatiere $filiere_matiere)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FiliereMatiere $program)
    {
        $program -> delete();
        session()->flash('danger', "Le programme a été bien supprimer");
        return redirect()->route('program.index');
    }
}
