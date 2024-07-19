<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Filiere;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class EtudiantController extends Controller
{
    public function __construc()
    {
        return $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etudiants = Etudiant::all();
        return view ('admin/pages/etudiants/create',compact('etudiants'));

    }
    public function index1()
    {
        $etudiants = Etudiant::all();
        return view ('admin/pages/etudiants/index',compact('etudiants'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $filieres = Filiere:: All();
        return view('admin/pages/etudiants/add', compact('filieres'));


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ramdomString = Str::random(10);
        $request->validate([
            'email' => 'required|email|unique:etudiants',
            'name' => 'required|string',
            'an_c' => 'required|string',
            'tel' => 'required|string',
        ]);

        Etudiant::create([
            'email'=>$request->email,
            'name'=>$request->name,
            'num_matri'=>$ramdomString,
            'an_c'=>$request->an_c,
            'tel'=>$request->tel,
            'filiere_id'=>$request->filiere_id,
        ]);
        session()->flash('success', "Nouveau etudiant ajouter avec succès");
        return redirect()->route('etudiant.index');


    }

    /**
     * Display the specified resource.
     */
    public function show(Etudiant $etudiant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Etudiant $etudiant)
    {
        return view ('admin/pages/etudiants/edit', compact("etudiant"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Etudiant $etudiant)
    {
        $etudiant->update([
            "email"=> $request-> email,
            "name"=> $request-> name,
            // "num_matri"=> $request-> num_matri,
            "an_c"=> $request-> an_c,
            "tel"=> $request-> tel,
        ]);
        session()->flash('warning', "L'étudiant a été bien modifié");
        return redirect()->route('etudiant.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Etudiant $etudiant)
    {
        $etudiant -> delete();
        session()->flash('danger', "L'étudiant a été bien supprimer");
        return redirect()->route('etudiant.index');
    }

    public function state(Etudiant $etudiant)
    {
        if($etudiant->status == true)
        {

            $etudiant->update([
                'status' => false
            ]);
            session()->flash('success', "L'étudiant a été bien désactivé");
        }
        else
        {
            $etudiant->update([
                'status' => true
            ]);
            session()->flash('danger', "L'étudiant a été bien activé");
        }
        return redirect()->route('etudiant.index');
    }
}
