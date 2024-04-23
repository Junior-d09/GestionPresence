<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formateur extends Model
{
    use HasFactory;
    protected $fillable =[
        'email',
        'nom_for',
        'pre_for',
        'tel',
        'num_matri',
    ];
}
