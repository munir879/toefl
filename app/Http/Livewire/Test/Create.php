<?php

namespace App\Http\Livewire\Test;

use Livewire\Component;
use App\Test;

class Create extends Component
{
    public $name;
    public $status = true;



    public function updated($field)
    {
        $this->validateOnly($field, [
            'name' => ['required', 'string', 'min:5', 'max:255'],
            'status' => ['required']
        ]);
    }
    public function store()
    {

        $validatedData = $this->validate([
            'name' => ['required', 'string', 'min:5', 'max:255'],
            'status' => ['required']
        ]);

        Test::create([
            'name' => $this->name,
            'is_active' => $this->status = 1 ? true : false
        ]);

        $this->emit('testStore');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.test.create');
    }
}
