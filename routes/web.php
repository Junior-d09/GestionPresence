<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\FormateurController;
use App\Http\Controllers\FiliereController;


Route::get('/', function () { return view('welcome');});

//*nos routes

Route::get('admin/index', [AdminController::class, 'index'])->middleware(['auth'])->name('index');
Route::get('admin/pages/index1', [AdminController::class, 'index1'])->name('home.index1');
Route::get('/register/create', [RegisteredUserController::class, 'create'])->name('register.create');
Route::post('register/store', [RegisteredUserController::class, 'store'])->name('register.store');
Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
Route::get('login/create', [AuthenticatedSessionController::class, 'create'])->name('login.create');
Route::post('login/store', [AuthenticatedSessionController::class, 'store'])->name('login.store');
Route::get('admin/pages/etudiants/create', [EtudiantController::class, 'create'])->name('etudiants.create');
Route::post('admin/pages/etudiants/add', [EtudiantController::class, 'store'])->name('etudiants.add');
Route::get('admin/pages/etudiants/index', [EtudiantController::class, 'index1'])->name('etudiant.index');
Route::get('admin/pages/etudiants/edit/{etudiant}', [EtudiantController::class, 'edit'])->name('etudiant.edit');
Route::put('admin/pages/etudiants/update/{etudiant}', [EtudiantController::class, 'update'])->name('etudiant.update');
Route::get('admin/pages/etudiants/destroy/{etudiant}', [EtudiantController::class, 'destroy'])->name('etudiant.destroy');
Route::get('admin/formateurs/index', [FormateurController::class, 'index'])->name('formateur.index');
Route::get('admin/formateurs/create', [FormateurController::class, 'create'])->name('formateur.create');
Route::post('admin/formateurs/store', [FormateurController::class, 'store'])->name('formateur.store');
Route::get('admin/formateurs/edit/{formateur}', [FormateurController::class, 'edit'])->name('formateur.edit');
Route::put('admin/formateurs/update/{formateur}', [FormateurController::class, 'update'])->name('formateur.update');
Route::get('admin/formateurs/destroy/{formateur}', [FormateurController::class, 'destroy'])->name('formateur.destroy');
Route::get('admin/filieres/index', [FiliereController::class, 'index'])->name('filiere.index');
Route::get('admin/filieres/create', [FiliereController::class, 'create'])->name('filiere.create');
Route::post('admin/filieres/store', [FiliereController::class, 'store'])->name('filiere.store');
Route::get('admin/filieres/edit/{filiere}',[FiliereController::class, 'edit'])->name('filiere.edit');
Route::put('admin/filieres/update/{filiere}',[FiliereController::class,'update'])->name('filiere.update');
Route::get('admin/filieres/destroy/{filiere}',[FiliereController::class ,'destroy'])->name('filiere.destroy') ;

Route::get('admin/admins/index2', [AdminController::class, 'index2'])->name( 'admin.index2' ); 
Route::get('admin/admins/create', [AdminController::class, 'create'])->name('admins.create');
Route::post('admin/admins/store', [AdminController::class, 'store'])->name('admins.store');
Route::get('admin/admins/edit/{admin}', [AdminController::class, 'edit'])->name('admins.edit');
Route::put('admin/admins/update/{admin}' , [AdminController::class, 'update'] )->name ('admin.update') ;
Route::get('admin/admins/destroy/{admin}', [AdminController::class, 'destroy']) -> name('admin.destroy') ;



//*fin nos routes

//*authentification
Route::get('dashboard', [DataServiceControler::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
// Route::get('/dashboard', function () { return view('dashboard');})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function ()
{
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
