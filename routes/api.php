<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/users', function () {
    // Return a list of users
});

Route::post('/users', function (Request $request) {
    // Create a new user
});

Route::get('admin/presence/{num_matri}', [PresenceController::class, 'presence'])->name('presence.etudiant');
Route::get('admin/presence1/{num_matri}', [PresenceController::class, 'presence1'])->name('presence1.formateur');