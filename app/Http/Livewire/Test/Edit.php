<?php

namespace App\Http\Livewire\Test;

use Livewire\Component;
use App\Test;

class Edit extends Component
{

    public $name;
    public $time;
    public $status;
    public $testId;
    protected $listeners = ['editTest' => 'setId'];

    function setId($id)
    {
        $this->testId = $id;
        $test = Test::find($id);
        $this->name = $test->name;
        $this->time = $test->time;
        $this->status = $test->is_active;
    }

    public function updated($field)
    {
        $this->validateOnly($field, [
            'name' => ['required', 'string', 'min:5', 'max:255'],
            'status' => ['required'],
            'time' => ['required'],
        ]);
    }

    public function edit()
    {
        $validatedData = $this->validate([
            'name' => ['required', 'string', 'min:5', 'max:255'],
            'status' => ['required'],
            'time' => ['required'],
        ]);

        $test = Test::find($this->testId);
        $test->name = $this->name;
        $test->time = $this->time;
        $test->is_active = $this->status = 1 ? true : false;
        $test->save();
        $this->emit('testUpdate');
        $this->reset();
    }


    public function render()
    {
        return view('livewire.test.edit');
    }
}
