<?php

namespace App\Http\Controllers;

use App\Models\Formateur;
use Illuminate\Http\Request;
use Illuminate\Support\str;

class FormateurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formateurs = Formateur::all();
        return view('admin/formateurs/index', compact('formateurs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/formateurs/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ramdomString = Str::random(10);
        $request->validate([
            'email'=> 'required|email|unique:formateurs',
            'name' => 'required|string',
            'tel' => 'required|string',
        ]);

        Formateur::create([
            'email'=>$request->email,
            'name'=>$request->name,
            'tel'=>$request->tel,
            'num_matri'=>$ramdomString,
                      
        ]);
        session()->flash('success', "Nouveau formateur ajouter avec succès");
        return redirect()->route('formateur.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Formateur $formateur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Formateur $formateur)
    {
        return view ('admin/formateurs/edit', compact("formateur"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Formateur $formateur)
    {
        $formateur->update([
            "email"=> $request-> email,
            "name"=> $request-> name,
            "tel"=> $request-> tel,
           
        ]);
        session()->flash('warning', "Le formateur a été bien modifié");
        return redirect()->route('formateur.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Formateur $formateur)
    {
        $formateur -> delete();
        session()->flash('danger', "Le formateur a été bien supprimer");
        return redirect()->route('formateur.index');
    }

    public function state(Formateur $formateur)
    {
        if($formateur->status == true)
        {

            $formateur->update([
                'status' => false
            ]);
            session()->flash('success', "Le formateur a été bien désactivé");
        }
        else
        {
            $formateur->update([
                'status' => true
            ]);
            session()->flash('danger', "Le formateur a été bien activé");
        }
        return redirect()->route('formateur.index');
    }
}
