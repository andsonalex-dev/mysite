<?php

namespace App\Http\Livewire;
use App\Models\Skill;
use Livewire\Component;
use Livewire\WithPagination;

class ListSkills extends Component
{
    public function render()
    {
        return view('livewire.list-skills',
        [
            'skills' => Skill::paginate(10),
        ]);
    }
}
