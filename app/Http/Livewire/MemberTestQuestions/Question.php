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
<<<<<<< HEAD


    public function mount($question, $MemberTest)
=======
    public $currentPage;
    public $total;


    public function mount($question, $MemberTest, $currentPage, $total)
>>>>>>> ccadd50c9e3c0c2bf8156cc66ad5ff7b257ad9b5
    {
        $this->resetPage();
        $this->IdQuestion = $question;
        $this->MemberTestId = $MemberTest;
<<<<<<< HEAD
    }

    public function asd()
    {
        dd($this->IdQuestion);
    }
=======
        $this->currentPage = $currentPage;
        $this->total = $total;
    }


>>>>>>> ccadd50c9e3c0c2bf8156cc66ad5ff7b257ad9b5

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
