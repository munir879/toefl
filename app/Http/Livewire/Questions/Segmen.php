<?php

namespace App\Http\Livewire\Questions;

use Livewire\Component;
use App\Test_segment;

class Segmen extends Component
{
    public $name;
    public $direction;
    public $question_quota;
    public $article_quota;


    public function store()
    {
        $test = Test_segment::create([
            'name' => $this->name,
        ]);
        $test->question_segment()->create([
            'direction' => $this->direction,
            'question_quota' => $this->question_quota,
            'article_quota' => $this->article_quota,
        ]);
    }

    public function render()
    {
        return view('livewire.questions.segmen');
    }
}
