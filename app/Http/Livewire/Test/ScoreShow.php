<?php

namespace App\Http\Livewire\Test;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Test;
use app\Member_test;

class ScoreShow extends Component
{
    public $test;
    public $IdTest;

    public function mount($id)
    {
        $this->test = Test::withCount([
            'Member_score AS avgScore' => function ($query) {
                $query->select(DB::raw("avg(score) as avgscore"));
            }
        ])->where('id', $id)->first();

        $this->IdTest = $id;
    }

    public function render()
    {
        $memberTest = Member_test::where('test_id', $this->IdTest)->with('member')->get();


        return view('livewire.test.score-show', compact('memberTest'));
    }
}
