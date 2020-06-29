<?php

namespace App\Http\Livewire\Questions;

use Livewire\Component;
use App\Question_segment;

class Segmen extends Component
{
    public $name;
    public $direction;
    public $question_quota;
    public $article_quota;
    public $IdTest;

    public function mount($id)
    {
        $this->IdTest = $id;
    }

    public function store()
    {
        $quess = new Question_segment;

        $TestSegmen = $quess->test_segments()->create([
            'name' => $this->name
        ])->id;

        $Question_segment = $quess->create([
            'test_segment_id' => $TestSegmen,
            'direction' => $this->direction,
            'question_quota' => $this->question_quota,
            'article_quota' => $this->article_quota
        ])->id;

        $quess->test_question_segment()->create([
            'test_id' => $this->IdTest,
            'question_segment_id' => $Question_segment
        ]);

        $this->reset('name', 'direction', 'question_quota', 'article_quota');
        $this->emit('testStore');
    }

    public function render()
    {
        return view('livewire.questions.segmen');
    }
}
