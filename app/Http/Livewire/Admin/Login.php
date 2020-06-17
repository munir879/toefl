<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email;
    public $password;
    public $remember;


    public function login()
    {
        $validatedData = $this->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::guard('admin')->attempt(['email' => $this->email, 'password' => $this->password])) {
            return redirect()->to('/');
        };
        session()->flash('status', 'Email atau Pasword salah');
    }

    public function render()
    {
        return view('livewire.user.login');
    }
}
