<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Member;
use Illuminate\Validation\Rule;

class Account extends Component
{
    public $name;
    public $email;
    public $OldPassword = '';
    public $NewPassword;
    public $AdminId;


    public function mount()
    {
        $member = \auth()->user();
        $this->name = $member->name;
        $this->email = $member->email;
        $this->AdminId = $member->id;
    }

    public function Update()
    {

        $validatedData = $this->validate([
            'name' => 'required',
            'email' => ['required', Rule::unique('members')->ignore($this->AdminId),],
            'OldPassword' => 'password:member',
            'NewPassword' => 'required||min:6',
        ]);

        $admin = Member::find($this->AdminId);
        $admin->name = $this->name;
        $admin->email = $this->email;
        $admin->password =  \Hash::make($this->NewPassword);
        $admin->save();
        session()->flash('status', 'Admins successfully Update.');
    }


    public function render()
    {
        return view('livewire.user.account');
    }
}
