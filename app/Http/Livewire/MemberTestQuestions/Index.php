<?php

namespace App\Http\Livewire\MemberTestQuestions;

use Livewire\Component;
use App\Test;
use App\Question;
use App\test_question_segment;
use Livewire\WithPagination;
use App\Member_test;
<<<<<<< HEAD
=======
use Illuminate\Routing\Route;
>>>>>>> ccadd50c9e3c0c2bf8156cc66ad5ff7b257ad9b5

class Index extends Component
{
    use WithPagination;
    public $Test;
    public $TestSegmen;
    public $QuesionSegmen;
    public $IdTest;
    public $Segmen;
    public $MemberTestId;
<<<<<<< HEAD


    public function mount($id)
    {
        $this->IdTest = $id;
        $this->DataTest($id);
        $this->MemberTestId = Member_test::firstOrCreate([
            'member_id' => \Auth::id(),
            'test_id' => $id
        ])->id;
=======
    public $MemberTest;
    public $Time;
    public $page = 1;


    protected $listeners = [
        'nextPage' => 'next',
        'previousPage' => 'previous',
        'finish' => 'finish'
    ];
    protected $updatesQueryString = [
        'page' => ['except' => 1],
    ];

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
        $this->fill(request()->only('page'));
    }


    public function next()
    {
        $this->page += 1;
    }

    public function previous()
    {
        $this->page -= 1;
    }


    public function time()
    {
        $Time = $this->MemberTest->created_at;

        $AddTime = $this->Test->time;
        $Endtime = date('Y-m-d H:i:s', strtotime(+$AddTime . 'minutes', strtotime($Time)));

        $TimeTest = date_diff(date_create($Endtime), date_create());
        $this->Time =  $TimeTest->h . ':' . $TimeTest->i . ':' . $TimeTest->s;

        if (date_create($Endtime) < date_create()) {
            $this->finish();
            return redirect()->route('member.score', ['id' => $this->MemberTestId]);
        }
>>>>>>> ccadd50c9e3c0c2bf8156cc66ad5ff7b257ad9b5
    }

    public function DataTest($id)
    {
<<<<<<< HEAD
=======

>>>>>>> ccadd50c9e3c0c2bf8156cc66ad5ff7b257ad9b5
        $this->Segmen = test_question_segment::where('test_id', $id)->with('test_segmen', 'question_segment')->get();
        $this->Test = Test::find($id);
        if (is_null($this->Test)) {
            return abort(404);
        }
    }


    public function finish()
    {
        $MemberAnswer = 0;
        $MemberTest =  Member_test::with('MemberTestQuestion')->find($this->IdTest);

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


        $MemberTest->score = $MemberAnswer / $TotalQues * 100;
        $MemberTest->save();

        return redirect()->route('member.score', ['id' => $this->MemberTestId]);
    }

    public function render()
    {
        $Question = test_question_segment::where('test_id', $this->IdTest)->with('question_segment')->paginate(1);

        return view('livewire.member-test-questions.index', compact('Question'));
    }
}
