<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Bio;

class CreateBio extends Component
{
    public $name;
    public $email;
    public $about;
    public $phone;

    protected $rules=[
        'name' => 'required',
        'email' => 'required',
        'about' => 'required',
        'phone' => 'required',
    ];
    public function create(){
        $this->validate();
        Bio::create([
            'name' => $this->name,
            'email' => $this->email,
            'about' => $this->about,
            'phone' => $this->phone,
        ]);

        $this->name = $this->email = $this->about =$this->phone = null;
        session()->flash('message', 'Projeto cadastrado com sucesso.');
    }
    public function render()
    {
        return view('livewire.create-bio');
    }
}
