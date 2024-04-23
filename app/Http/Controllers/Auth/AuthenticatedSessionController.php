<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;                                                                                                             
use Illuminate\View\View;
use App\Models\User;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $credentials= $request->validate
        ([
            'email' => ['required', 'email'],
            'password'=> ['required'],
        ]);
        
        $compte=User::where ('email','=',$request -> email)->first();
        if($compte==null){
         return back()->with('danger', "Ce compte n'existe pas");
         }
         else{
            if(Auth::attempt($credentials)) 
                {
                    $request->session()->regenerate();
                    return redirect(route('index', absolute: false)); 
                }
                 else{
                    return back()->with('danger', 'Mot de passe incorrect!');
                    }
         }

        
    }
       
    

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth()->logout();
        return redirect(route('login.create', absolute: false));

    }
}
