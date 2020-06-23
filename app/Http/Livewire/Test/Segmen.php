<?php

namespace App\Http\Livewire\Test;

use Livewire\Component;
use App\Test_segment;

class Segmen extends Component
{

    protected $listeners = [
        'testStore' => 'testStore', 'testUpdate' => 'testupdate'
    ];
    public $confirming;

    public function testStore()
    {
        session()->flash('message', 'Test segmen successfully created.');
    }


    public function render()
    {
        return view('livewire.test.segmen', [
            'TestSegmen' => Test_segment::with('question_segment')->get()
        ]);
    }
}
