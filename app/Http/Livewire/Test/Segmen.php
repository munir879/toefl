<?php

namespace App\Http\Livewire\Test;

use Livewire\Component;
use App\test_question_segment;
use App\Test;

class Segmen extends Component
{


    public $confirming;
    public $IdTest;
    public $question_segments;
    protected $listeners = [
        'testStore' => 'testStore', 'testUpdate' => 'testupdate'
    ];

    public function mount($id)
    {
        $this->IdTest = $id;
        $this->question_segments($id);
    }

    private function question_segments($id)
    {
        $this->question_segments = test_question_segment::where('test_id', $id)->with('test_segmen', 'question_segment')->get();
        if ($this->question_segments->isEmpty()) {
            return abort(404);
        }
    }


    public function testStore()
    {
        $this->question_segments($this->IdTest);
        session()->flash('message', 'Test segmen successfully created.');
    }


    public function render()
    {
        return view('livewire.test.segmen');
    }
}
