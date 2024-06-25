<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Login')]
#[Layout('components.layouts.auth')]
class LoginLivewire extends Component
{
    public $email;

    public $password;

    public $remember;

    public function render()
    {
        return view('livewire.login-livewire');
    }

    public function login()
    {
        $credentials = ['email' => $this->email, 'password' => $this->password];
        if (Auth::attempt($credentials, $this->remember)) {
            return redirect()->route('home');
        }
    }
}
