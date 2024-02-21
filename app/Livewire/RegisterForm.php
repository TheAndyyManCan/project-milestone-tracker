<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Component;

class RegisterForm extends Component
{

    #[Validate('required|min:3')]
    public $name = '';

    #[Validate('required|email')]
    public $email = '';

    #[Validate('required|min:8')]
    public $password = '';

    public function store(){
        $this->validate();
        $attributes = [
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password
        ];
        User::create($attributes);
        return redirect('/');
    }

    public function render()
    {
        return view('livewire.register-form');
    }
}
