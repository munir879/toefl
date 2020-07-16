<?php

namespace App\Http\Livewire\Test;

use Livewire\Component;
use App\Test;
use Illuminate\Support\Facades\DB;

class Score extends Component
{
    public function render()
    {
        $test = Test::withCount([
            'Member_score AS avgScore' => function ($query) {
                $query->select(DB::raw("avg(score) as paidsum"));
            }
        ])
            ->get();


        return view('livewire.test.score', compact('test'));
    }
}
