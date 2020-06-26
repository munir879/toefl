<?php

namespace App\Http\Livewire\Test;

use Livewire\Component;
use App\Test;
use App\Test_segment;

class Index extends Component
{
    protected $listeners = [
        'testStore' => 'testStore', 'testUpdate' => 'testupdate'
    ];
    public $confirming;

    public function testStore()
    {
        session()->flash('message', 'Test successfully created.');
    }

    public function testupdate()
    {
        session()->flash('message', 'Test successfully updated.');
    }

    public function confirmDelete($id)
    {
        $this->confirming = $id;
    }

    public function kill($id)
    {
        Test::destroy($id);
        session()->flash('message', 'Test successfully deleted.');
    }

    public function render()
    {
        return view('livewire.test.index', [
            'test' => Test::with('question_segments')->get()
        ]);
    }
}
