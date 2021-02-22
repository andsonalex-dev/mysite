<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Project;

class CreateProject extends Component
{
    use WithFileUploads;
    public $title;
    public $url;
    public $body;
    public $image;

    protected $rules=[
        'title' => 'required',
        'url' => 'required',
        'body' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ];
    public function create(){
        $this->validate();
        $urlImage = $this->image->store('images', 'public');
        Project::create([
            'title' => $this->title,
            'body' => $this->body,
            'url' => $this->url,
            'image' =>$urlImage,
        ]);

        $this->title = $this->url = $this->body =$this->image = null;
        session()->flash('message', 'Projeto cadastrado com sucesso.');
    }
    public function render()
    {
        return view('livewire.create-project');
    }
}
