<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'category',
    ];

    //Sto dicendo che tutti gli oggetti Category saranno collegati a piú oggetti Article
    public function articles(): BelongsToMany
    {
        //Dell'oggetto Category che hai creato recuperami tutti gli articoli strettamente collegati
        return $this->belongsToMany(Article::class);
    }
}
