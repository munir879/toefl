<?php

namespace App\Http\Livewire\Score;

use Livewire\Component;
<<<<<<< HEAD
=======
use App\Test;
use Illuminate\Database\Eloquent\Builder;
>>>>>>> ccadd50c9e3c0c2bf8156cc66ad5ff7b257ad9b5

class Index extends Component
{
    public function render()
    {
<<<<<<< HEAD
        return view('livewire.score.index');
=======
        $IdMember = \Auth::id();
        $test = Test::whereHas('Member_test', function (Builder $query) use ($IdMember) {
            $query->where('member_id', $IdMember);
            $query->whereNotNull('score');
        })
            ->with('Member_score')
            ->get();

        return view('livewire.score.index', compact('test'));
>>>>>>> ccadd50c9e3c0c2bf8156cc66ad5ff7b257ad9b5
    }
}
