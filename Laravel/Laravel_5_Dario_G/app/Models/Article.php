<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'where',
        'suggestion',
    ]; //? NB. Questi devono rappresentare i CAMPI nel nostro database
}

