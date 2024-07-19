<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;
use App\Models\Etudiant;
use App\Models\Formateur;
use App\Models\Filiere;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        $nbrEtu = count(Etudiant::all());
        $nbrFor = count(Formateur::all());
        $nbrFil = count(Filiere::all());
        $nbrAdm = count (Admin::all());
         
        return view('admin/index',compact ('nbrEtu','nbrFor','nbrFil','nbrAdm'));
    }

    public function index2()
    {
        $admins = User::All();
        return view('admin/admins/index2', compact( 'admins' ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/admins/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ramdomString = Str::random(10);
        $request->validate([
            'email' => 'required|email|unique:users',
            'name' => 'required|string',
        ]);

        User::create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'password'=>$ramdomString,
        ]);
        session()->flash('success', "Nouveau Administrateur ajouter avec succès");
        Mail::to($request->email)->send(new Contact($ramdomString));
        return redirect()->route('admin.index2');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $admin)
    {
        return view('admin/admins/edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $admin)
    {
        $ramdomString = Str::random(10);
        $admin->update([
            "email"=> $request-> email,
            "name" => $request-> name,
            "password"=>$ramdomString ,
        ]);
        session()->flash('warning', "Modification effectuée avec succés");
        return redirect()->route('admin.index2');
    }
        

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $admin)
    {
        $admin -> delete();
        session()->flash('danger', "L'Administrareur à été  bien supprimer");
        return redirect()->route('admin.index2');
    }

    public function state(User $admin)
    {
        if($admin->status == true)
        {

            $admin->update([
                'status' => false
            ]);
            session()->flash('success', "L'admin a été bien désactivé");
        }
        else
        {
            $admin->update([
                'status' => true
            ]);
            session()->flash('danger', "L'admin a été bien activé");
        }
        return redirect()->route('admin.index2');
    }
}
