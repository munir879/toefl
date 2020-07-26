<?php

namespace App\Http\Livewire\Questions;

use Livewire\Component;
use App\Question_segment;
use App\Question;

class Index extends Component
{

    public $Questions;
    public $confirming;
    public $Question_segment;

    public function mount($id)
    {
        $this->Question_segment = $id;
        $this->data($id);
    }

    public function data($id)
    {
        $data = Question_segment::find($id);
        if (is_null($data)) {
            return abort(404);
        }
        $this->Questions = Question::where('question_segment_id', $id)->with('Aswers', 'Article')->get();
    }

    public function confirmDelete($id)
    {
        $this->confirming = $id;
    }

    public function kill($id)
    {
        Question::destroy($id);
        $this->data($this->Question_segment);
        session()->flash('message', 'Test successfully deleted.');
    }

    public function render()
    {
        return view('livewire.questions.index');
    }
}
