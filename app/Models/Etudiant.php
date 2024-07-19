<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    protected $fillable =[
        'email',
        'name',
        'an_c',
        'num_matri',
        'tel',
        'filiere_id',
        'status',
    ];

    public function filiere ()
    {
       return $this->belongsTo(Filiere::class);
    }

    public function program()
    {
        return
        $this->hasMany(Program::class);
    }  
}
