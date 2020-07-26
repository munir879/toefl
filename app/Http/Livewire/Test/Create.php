<?php

namespace App\Http\Livewire\Test;

use Livewire\Component;
use App\Test;

class Create extends Component
{
    public $name;
    public $time;
    public $status = true;



    public function updated($field)
    {
        $this->validateOnly($field, [
            'name' => ['required', 'string', 'min:5', 'max:255'],
            'time' => ['required'],
            'status' => ['required']
        ]);
    }
    public function store()
    {

        $validatedData = $this->validate([
            'name' => ['required', 'string', 'min:5', 'max:255'],
            'time' => ['required'],
            'status' => ['required']
        ]);

        Test::create([
            'name' => $this->name,
            'time' => $this->time,
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
