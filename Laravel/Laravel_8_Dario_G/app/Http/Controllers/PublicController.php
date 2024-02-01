<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ArticleRequest;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Facades\Artisan;

class PublicController extends Controller
{
    public function home()
    {   $utenti = User::all();
        return view ('welcome', compact('utenti') );
    }

    public function category()
    {
        return view ('category');
    }

    public function category_store(Request $request, CategoryRequest $CategoryRequest)
    {
        $category = Category::create([
            'category' => $request->category,
        ]);
    
        return redirect()->route('home')->with('message', 'Categoria creata');
    }
    
    public function utenti()
{   
    $utenti = User::all();
    return view ('allUsers', compact('utenti'));
}


}
