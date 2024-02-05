<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();

        return view('article.index', compact('articles'));

    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $categories = Category::all();
        return view('article.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, ArticleRequest $ArticleRequest)
{   
    // Creazione dell'articolo
    $article = Article::create([
        'name' => $request->name,
        'price'=> $request->price,
        'user_id'=> Auth::user()->id,
        'img'=> $request->file('img')->store('public/img'),
    ]);

   //Dellarticolo che sto creando, recuperami tutte le categorie collegate (in questo caso é una collection vuota),agganciami la nuova categoria


    foreach ($request->categories as $category) {
        $article->categories()->attach($category);
    }
    return redirect()->route('home')->with('message', 'Annuncio creato');
}


    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view ('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view ('article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ArticleRequest $articleRequest, Article $article)
{
    $article->update([
        'name' => $request->name,
        'price' => $request->price,
        // 'img' => $request->img ? $request->file('img')->store('public/img') : $article->img,

    ]);

    return redirect()->route('home')->with('message', 'Annuncio modificato');
}



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('home')->with('message', 'Oggetto Eliminato');
    }
}
