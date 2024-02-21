<?php

namespace App\Livewire;

use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{

    #[Validate('required|email')]
    public $email = '';

    #[Validate('required')]
    public $password = '';

    public function login(){
        $this->validate();
        if(!auth()->attempt([
            'email' => $this->email,
            'password' => $this->password
        ])){
            throw ValidationException::withMessages([
                'email' => 'Your provided credentials could not be verified'
            ]);
        }

        session()->regenerate();
        return redirect('/');
    }

    public function render()
    {
        return view('livewire.login');
    }
}
