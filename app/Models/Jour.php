<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jour extends Model
{
    use HasFactory;
    protected $fillable =[
        'label',
        'heure_deb',
        'heure_fin',
    ];
    public function filiere_matiere()
    {
       return $this->belongsTo(FiliereMatiere::class);
    }
}
