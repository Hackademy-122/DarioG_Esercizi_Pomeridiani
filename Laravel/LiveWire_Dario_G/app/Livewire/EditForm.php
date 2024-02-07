<?php

namespace App\Livewire;

use App\Models\Album;
use Livewire\Component;

class EditForm extends Component
{
    public $title;
    public $artist;
    public $year;
    public Album $pippo;
    // regole validazione
    protected $rules = [
        'title' => 'required|min:5',
        'artist' => 'required',
        'year' => 'required',

    ];

    protected $messages = [
        'title.required' => 'Il titolo é richiesto',
        'title.min' => 'Il titolo deve essere di minimo 5 caratteri',
        'artist.required' => 'Il corpo é richiesto',
        'year.required' => 'Il corpo é richiesto',
        
        
    ];
    //validazione live
    public function updated($property)
    {
        $this->validateOnly($property);
    }

    // monta gli input con i campi precompilati, in base a quello che gli arriva da pippo
    public function mount($pippo){

        $this->title = $pippo->title;
        $this->artist = $pippo->artist;
        $this->year = $pippo->year;

    }
    //metodo che aggiorna l' oggetto, validando prima i campi
    public function update(){
        $this->validate();
        $this->pippo->update([
            'title'=>$this->title,
            'artist'=>$this->artist,
            'year'=>$this->year,

        ]);

        $this->reset();

        return redirect()->route('index')->with('message','Articolo modificato con successo');
    }

    public function render()
    {
        return view('livewire.edit-form');
    }

}
