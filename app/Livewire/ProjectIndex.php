<?php

namespace App\Livewire;

use App\Livewire\Forms\ProjectForm;
use Livewire\Component;

class ProjectIndex extends Component
{

    public $projects;
    public ProjectForm $form;
    public $showForm = false;
    public $blur = 'none';

    public function mount($projects){
        $this->projects = $projects;
    }

    public function toggleForm(){
        $this->showForm = !$this->showForm;
        $this->blur = ($this->blur == 'none') ? $this->blur = 'sm' : $this->blur = 'none';
    }

    public function create(){

    }

    public function render()
    {
        return view('livewire.project-index');
    }
}
