<?php

namespace App\Http\Livewire\Score;

use Livewire\Component;
use App\Test;
use Illuminate\Database\Eloquent\Builder;

class Index extends Component
{
    public function render()
    {
        $IdMember = \Auth::id();
        $test = Test::whereHas('Member_test', function (Builder $query) use ($IdMember) {
            $query->where('member_id', $IdMember);
            $query->whereNotNull('score');
        })
            ->with('Member_score')
            ->get();

        return view('livewire.score.index', compact('test'));
    }
}
