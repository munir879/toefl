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


    public function mount($id)
    {
        $this->IdTest = $id;
        $this->DataTest($id);
        $this->MemberTestId = Member_test::firstOrCreate([
            'member_id' => 1,
            'test_id' => $id
        ])->id;
    }

    public function DataTest($id)
    {
        $this->Segmen = test_question_segment::where('test_id', $id)->with('test_segmen', 'question_segment')->get();
        $this->Test = Test::find($id);
    }

    public function render()
    {
        $Question = test_question_segment::where('test_id', $this->IdTest)->with('question_segment')->paginate(1);
        $Question->setPageName('Question');
        return view('livewire.member-test-questions.index', compact('Question'));
    }
}
