<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Link;

class CreateLink extends Component
{
    public $type;
    public $url;


    protected $rules=[
        'type' => 'required',
        'url' => 'required',
    ];
    public function create(){
        $this->validate();
        Link::create([
            'type' => $this->type,
            'url' => $this->url,
        ]);

        $this->type = $this->url = null;
        session()->flash('message', 'Perfil cadastrado com sucesso.');
    }
    public function render()
    {
        return view('livewire.create-link');
    }
}
