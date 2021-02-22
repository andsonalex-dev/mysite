<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Project;


class ProjectComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $url;
    public $body;
    public $image;
    public $isOpen = 0;
    public $projects;
    public $selected_id;

    protected $rules=[
        'title' => 'required',
        'url' => 'required',
        'body' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ];

    public function render()
    {
        $this->projects = Project::all();
        return view('livewire.project-component');
    }


    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function openModal()
    {
        $this->isOpen = true;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function closeModal()
    {
        $this->isOpen = false;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields(){
        $this->title = null;
        $this->url = null;
        $this->body = null;
        $this->image = null;
        $this->selected_id = null;
    }


    public function store(){
        $this->validate();
        $urlImage = $this->image->store('images', 'public');
        Project::updateOrCreate([
            'title' => $this->title,
            'body' => $this->body,
            'url' => $this->url,
            'image' =>$urlImage,
        ]);
        session()->flash('message', 'Projeto cadastrado com sucesso.');
        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $record = Project::findOrFail($id);

        $this->selected_id = $id;
        $this->title = $record->title;
        $this->body = $record->body;
        $this->url = $record->url;
        $this->image = $record->image;
        $this->openModal();
    }

    public function update()
    {
        $this->validate([
            'selected_id' => 'required|numeric',
            'title' => 'required',
            'url' => 'required',
            'body' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($this->selected_id) {
            $record = Project::find($this->selected_id);
            $urlImage = $this->image->store('images', 'public');
            $record->update([
                'title' => $this->title,
                'url' => $this->url,
                'body' => $this->body,
                'image' => $urlImage,
            ]);

            $this->resetInput();
            $this->updateMode = false;
        }

    }

    public function delete($id)
    {
        if ($id) {
            $record = Project::where('id', $id);
            $record->delete();
            session()->flash('message', 'Projeto deletado com sucesso.');
        }
    }

}

