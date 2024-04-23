<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Mail;
Use App\Mail\VerifyEmail;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string' ],
            'firstname' => ['required', 'string', ],
            'email' => ['required', 'email', 'unique:'.User::class],
            'password' => ['required', 'confirmed'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'firstname' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'email_verified_at' =>Str::random(20),
        ]);

        Mail::to($request->email)->send(new VerifyEmailRegister($user));

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('index', absolute: false));
    }
}
