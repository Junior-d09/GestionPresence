<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    protected $fillable =[
        'email',
        'nom_etu',
        'pre_etu',
        'an_c',
        'num_matri',
        'tel',
        'filiere_id'
    ];

    public function filiere ()
    {
       return
       $this->belongsTo(Filiere::class);
    }
}
