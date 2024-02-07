<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Genre;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('album.index', ['albums'=>Album::all()]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   

        return view ('album.create');
    }

    public function edit(Album $album)
    {
        return view('album.edit');
    }

    /**
     * Display the specified resource.
     */
    public function show(Album $album)
    {   

        return view('album.show', compact('album'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Album $album)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Album $album)
    {   
        foreach ($album->genres as $item)
        {
            $item->albums()->detach($album->id);
        }

        $album->delete();
        return redirect()->route('home')->with('message', 'Oggetto Eliminato');
    }
}
