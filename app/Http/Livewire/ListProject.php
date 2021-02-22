<?php

namespace App\Http\Livewire;
use App\Models\Project;
use Livewire\WithPagination;

use Livewire\Component;

class ListProject extends Component
{
    public function render()
    {
        return view('livewire.list-project',
        [
            'projects' => Project::paginate(10),
        ]);
    }
}
