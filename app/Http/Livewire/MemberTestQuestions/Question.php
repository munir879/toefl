<?php

namespace App\Http\Livewire\MemberTestQuestions;

use Livewire\Component;
use Livewire\WithPagination;
use App\Question as Qs;
use App\Member_test_question;


class Question extends Component
{
    use WithPagination;
    public $IdQuestion;
    public $MemberTestId;

    public function mount($question, $MemberTest)
    {
        $this->resetPage();
        $this->IdQuestion = $question;
        $this->MemberTestId = $MemberTest;
    }

    public function asd()
    {
        dd($this->IdQuestion);
    }

    public function Aswer($IdQuestion, $idAnswer)
    {

        Member_test_question::updateOrCreate(
            [
                'question_id' => $IdQuestion,
                'member_test_id' => $this->MemberTestId,
            ],
            [
                'answer_id' => $idAnswer,

            ]
        );
    }

    public function render()
    {
        $ques = Qs::where('question_segment_id', $this->IdQuestion)->with('Aswers', 'Article', 'member_test_question')->paginate(1);
        return view('livewire.member-test-questions.question', compact('ques'));
    }
}