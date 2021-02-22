<?php

namespace App\Http\Livewire;
use App\Models\Project;
use Livewire\Component;

class ShowProjectFront extends Component
{
    public function render()
    {
        return view('livewire.show-project-front', [
            'projects' => Project::all(),
        ]);

    }
}
