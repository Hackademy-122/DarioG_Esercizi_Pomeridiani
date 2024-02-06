<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class EditForm extends Component
{   
    
    public $name;
    public $price;
    public Article $pippo;
    // regole validazione
    protected $rules = [
        'name' => 'required|min:5',
        'price' => 'required',
    ];

    protected $messages = [
        'name.required' => 'Il titolo é richiesto',
        'name.min' => 'Il titolo deve essere di minimo 5 caratteri',
        'price.required' => 'Il corpo é richiesto',
        
    ];
    //validazione live
    public function updated($property)
    {
        $this->validateOnly($property);
    }

    // monta gli input con i campi precompilati, in base a quello che gli arriva da pippo
    public function mount($pippo){

        $this->name = $pippo->name;
        $this->price = $pippo->price;
    }
    //metodo che aggiorna l' oggetto, validando prima i campi
    public function update(){
        $this->validate();
        $this->pippo->update([
            'name'=>$this->name,
            'price'=>$this->price
        ]);

        $this->reset();

        return redirect()->route('index')->with('message','Articolo modificato con successo');
    }

    public function render()
    {
        return view('livewire.edit-form');
    }
}

