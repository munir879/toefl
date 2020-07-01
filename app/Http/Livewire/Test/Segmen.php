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
    public $confirm;

    protected $listeners = [
        'testStore' => 'testStore',
        'testUpdate' => 'testupdate',
        'SegmenUpdate' => 'SegmenUpdate'
    ];

    public function mount($id = null)
    {
        if ($id == null) {
            return abort(404);
        }
        $this->IdTest = $id;
        $this->question_segments($id);
    }

    public function confirmDelete($id)
    {
        $this->confirm = $id;
    }

    public function kill($id)
    {
        $test = test_question_segment::find($id);
        dd($test->test_segmen->delete());
        session()->flash('message', 'Test successfully deleted.');
    }

    private function question_segments($id)
    {
        $this->question_segments = test_question_segment::where('test_id', $id)->with('test_segmen', 'question_segment')->get();
    }


    public function testStore()
    {
        $this->question_segments($this->IdTest);
        session()->flash('message', 'Test segmen successfully created.');
    }

    public function SegmenUpdate()
    {
        $this->question_segments($this->IdTest);
        session()->flash('message', 'Test segmen successfully Update.');
    }


    public function render()
    {
        return view('livewire.test.segmen');
    }
}
