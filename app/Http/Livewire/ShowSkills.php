<?php

namespace App\Http\Livewire;
use App\Models\Skill;
use Livewire\Component;
use Livewire\WithPagination;

class ShowSkills extends Component
{
    public function render()
    {
        return view('livewire.show-skills', [
            'skills' => Skill::all(),
        ]);
    }
}
