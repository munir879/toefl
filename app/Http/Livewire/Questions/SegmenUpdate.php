<?php

namespace App\Http\Livewire\Questions;

use Livewire\Component;
use App\Question_segment;

class SegmenUpdate extends Component
{
    public $name;
    public $direction;
    public $question_quota;
    public $article_quota;
    public $QuessId;

    protected $listeners = ['EditSegmen' => 'setId'];

    function setId($id)
    {
        $this->QuessId = $id;
        $Question_segment = Question_segment::find($id);
        $this->name = $Question_segment->test_segments->name;
        $this->direction = $Question_segment->direction;
        $this->question_quota = $Question_segment->question_quota;
        $this->article_quota = $Question_segment->article_quota;
    }


    public function Update()
    {
        $quess = Question_segment::find($this->QuessId);

        $TestSegmen = $quess->test_segments()->update([
            'name' => $this->name
        ]);

        $Question_segment = $quess->update([
            'direction' => $this->direction,
            'question_quota' => $this->question_quota,
            'article_quota' => $this->article_quota
        ]);


        $this->reset('name', 'direction', 'question_quota', 'article_quota');
        $this->emit('SegmenUpdate');
    }

    public function render()
    {
        return view('livewire.questions.segmen-update');
    }
}
