<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class Logout extends Component
{

    public function mount()
    {


        if (Auth::guard('member')->check()) {
            Auth::guard('member')->logout();
            return redirect()->route('user.login');
        } elseif (Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();
            return redirect()->route('admin.login');
        }
    }
}
