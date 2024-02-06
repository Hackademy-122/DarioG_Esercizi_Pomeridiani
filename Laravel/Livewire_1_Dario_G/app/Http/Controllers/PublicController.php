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

        return view ('index');

    }

    public function show(Article $article)
    {   
        
        return view ('show', compact('article'));
    }

    public function edit(Article $article)
    {
        return view ('edit', compact('article'));
    }

}
