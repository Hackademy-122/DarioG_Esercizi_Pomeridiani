<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class CreateForm extends Component

{   
    public $name;
    public $price;
    public $img;

    protected $rules = [
        'name' => 'required|min:5',
        'price' => 'required',
    ];

    protected $messages = [
        'name.required' => 'Il titolo é richiesto',
        'name.min' => 'Il titolo deve essere di minimo 5 caratteri',
        'price.required' => 'Il corpo é richiesto',
        
    ];
    //!live validations. Inserire wire:model.live nel form per renderla efficace!
    //? public function updated($property)
    //? {
    // ?    $this->validateOnly($property);
    //? }

    public function store()
    {   
        $this->validate();

        

        
        Article::create([
            'name'=>$this->name,
            'price'=>$this->price,
            ]);

        $this->reset();

        return redirect(route('create'))->with('message', 'Aggiunto');
    }


    public function render()
    {
        return view('livewire.create-form');
    }
}
