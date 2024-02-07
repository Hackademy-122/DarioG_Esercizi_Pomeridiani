<?php

namespace App\Livewire;

use App\Models\Album;
use App\Models\Genre;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class CreateForm extends Component
{   
    use WithFileUploads;
    
    public $artist;
    public $year;
    public $title;
    public $genreSelected;
    public $allGenres;
    public $img;

    protected $rules = [
        'artist' => 'required',
        'year' => 'required',
        'title' => 'required',
        'genreSelected'=>'required',
        'img'=>'required'
    ];

    protected $messages = [
        'artist.required' => 'Inserisci un artista',
        'year.required' => 'Inserisci anno di uscita',
        'title.required' => 'Inserisci titolo album',
    ];

    public function mount()
    {
        $this->allGenres = Genre::all();
    }
    public function store()
    {
        $this->validate();
    
        $album = Album::create([
            'artist' => $this->artist,
            'title' => $this->title,
            'year' => $this->year,
            'user_id' => Auth::user()->id,
            'img' => $this->img->store('public/img'),
        ]);
    
        foreach ($this->genreSelected as $genreId) {
            $album->genres()->attach($genreId);
        }
    
        $this->reset();
    
        return redirect(route('create'))->with('message', 'Aggiunto');
    }
    public function render()
    {   

        return view('livewire.create-form');
    }
}
