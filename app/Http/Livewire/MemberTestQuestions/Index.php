<?php

namespace App\Http\Livewire\MemberTestQuestions;

use Livewire\Component;
use App\Test;
use App\test_question_segment;
use Livewire\WithPagination;
use App\Member_test;

class Index extends Component
{
    use WithPagination;
    public $Test;
    public $TestSegmen;
    public $QuesionSegmen;
    public $IdTest;
    public $Segmen;
    public $MemberTestId;
    public $MemberTest;
    public $Time;


    public function mount($id)
    {

        $this->IdTest = $id;
        $this->DataTest($id);

        $MemberTest =
            Member_test::firstOrCreate([
                'member_id' => \Auth::id(),
                'test_id' => $id
            ]);

        $this->MemberTestId = $MemberTest->id;
        $this->MemberTest = $MemberTest;
        $this->time();
    }

    public function time()
    {
        $Time = $this->MemberTest->created_at;
        $Endtime = date('Y-m-d H:i:s', strtotime('+1 hour', strtotime($Time)));
        $TimeTest = date_diff(date_create($Endtime), date_create());
        $this->Time =  $TimeTest->h . ':' . $TimeTest->i . ':' . $TimeTest->s;
    }

    public function DataTest($id)
    {

        $this->Segmen = test_question_segment::where('test_id', $id)->with('test_segmen', 'question_segment')->get();

        $this->Test = Test::find($id);
        if (is_null($this->Test)) {
            return abort(404);
        }
    }

    public function render()
    {
        $Question = test_question_segment::where('test_id', $this->IdTest)->with('question_segment')->paginate(1);

        return view('livewire.member-test-questions.index', compact('Question'));
    }
}
