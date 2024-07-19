<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presence extends Model
{
    use HasFactory;
    protected $fillable =[
        'num_matri',
        'date',
        'name',
        'heure',
        'profession',
        'etudiant_id',
        'formateur_id'
    ];
    public function etudiant(){
        return $this->belongsTo(Etudiant::class);
    }
    public function formateur(){
        return $this->belongsTo(Formateur::class);
    }
}
