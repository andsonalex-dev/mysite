<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Skill;

class CreateSkill extends Component
{
    public $title;
    public $rating;


    protected $rules=[
        'title' => 'required',
        'rating' => 'required',
    ];
    public function create(){
        $this->validate();
        Skill::create([
            'title' => $this->title,
            'rating' => $this->rating,
        ]);

        $this->title = $this->rating = null;
        session()->flash('message', 'Habilidade cadastrada com sucesso.');
    }
    public function render()
    {
        return view('livewire.create-skill');
    }
}
