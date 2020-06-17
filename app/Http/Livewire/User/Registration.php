<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Member;
use Illuminate\Support\Facades\Hash;

class Registration extends Component
{

    public $name;
    public $password;
    public $repassword;
    public $email;

    public function updated($field)
    {
        $this->validateOnly($field, [
            'name' => ['required', 'string', 'min:5', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:members'],
            'password' => ['required', 'string', 'min:8'],
            'repassword' => ['same:password'],
        ]);
    }

    public function Registration()
    {
        $validatedData = $this->validate([
            'name' => ['required', 'string', 'min:5', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:members'],
            'password' => ['required', 'string', 'min:8'],
            'repassword' => ['same:password'],
        ]);

        Member::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);
        session()->flash('status', 'Member successfully created.');
        $this->reset();
    }


    public function render()
    {
        return view('livewire.user.registration');
    }
}
