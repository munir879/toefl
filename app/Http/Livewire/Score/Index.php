<?php

namespace App\Http\Livewire\Score;

use Livewire\Component;
use App\Member_test;
use App\Question;
use App\Test;
use App\test_question_segment;
use Illuminate\Support\Facades\DB;

class Index extends Component
{
    public $Score = [];
    public $ques;
    public $Test;



    public function mount()
    {



        $this->data();
    }

    public function data()
    {
        $MemberAnswer = 0;
        $MemberTest =  Member_test::with('MemberTestQuestion')->find(1);
        foreach ($MemberTest->MemberTestQuestion as $data) {

            $answer = Question::where('id', $data->question_id)->with(['Aswers' => function ($query) use ($data) {
                $query->where('id', $data->answer_id);
            }])->first();

            if ($answer->Aswers[0]->is_correct) {
                $MemberAnswer += 1;
            }
        }

        $TotalQues = 0;
        $ques = test_question_segment::where('test_id', 1)->with('questions')->get();

        foreach ($ques as $data) {
            $TotalQues += $data->questions->count();
        }
        $this->Score['true'] = $MemberAnswer;
        $this->Score['wrong'] = $TotalQues - $MemberAnswer;
        $this->Score['total'] = $TotalQues;
    }

    public function render()
    {
        return view('livewire.score.index');
    }
}
