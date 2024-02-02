<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'img',
        'user_id'
    ];

    //L'oggetto di tipo article é STRETTAMENTE collegato ad UN SOLO oggetto di tipo User
    public function user(): BelongsTo
    {
        //La funzione quando chiamata sull'oggetto article restiuirá L'UNICO utente ad esso collegato
        return $this->belongsTo(User::class);
    }

    //Sto dicendo che tutti gli oggetti article saranno collegati a piú oggetti category
    public function categories(): BelongsToMany
    {
        //Dell'oggetto Article che hai creato recuperami tutte le categorie strettamente collegate
        //Retsituisce una collection di oggetti Category
        return $this->belongsToMany(Category::class);
    }

}   
