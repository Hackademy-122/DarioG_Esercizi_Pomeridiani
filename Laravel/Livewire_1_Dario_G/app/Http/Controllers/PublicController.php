<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home()
    {
        return view ('welcome');
    }

    public function create()
    {
        return view ('create');
    }

    public function index()
    {   
        $articles=Article::all();
        return view ('index', compact('articles'));

    }

    public function show(Article $article)
    {   
        ;
        return view ('show', compact('article'));
    }

}
