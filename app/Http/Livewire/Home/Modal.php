<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;

class Modal extends Component
{
    public $data;
    public function updated($field)
    {
        $this->validateOnly($field, [
            'data' => ['required', 'string', 'min:5', 'max:255'],
        ]);
    }

    public function save()
    {
        $this->emit('postAdded');
    }
    public function render()
    {
        return view('livewire.home.modal');
    }
}
