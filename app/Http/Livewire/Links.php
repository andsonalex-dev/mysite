<?php

namespace App\Http\Livewire;

use App\Models\Link;
use Livewire\Component;

class Links extends Component
{
    public $links;
    public function render()
    {
        $this->links = Link::all();
        return view('livewire.links');
    }
}
