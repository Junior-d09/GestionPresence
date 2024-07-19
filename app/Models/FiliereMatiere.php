<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FiliereMatiere extends Model
{
    use HasFactory;

    protected $table = 'filiere_matiere';

    protected $fillable = [
        'date_deb',
        'date_fin',
        'formateur_id',
        'sale',
        'filiere',
        'filiere_id',
        'matiere_id',
    ];
    public function jours()
    {
        return
        $this->hasMany(Matiere::class);
    } 

}
