<?php

namespace App\Http\Livewire\Test;

use Livewire\Component;
use App\Test_segment;

class Segmen extends Component
{
    public function render()
    {
        return view('livewire.test.segmen', [
            'TestSegmen' => Test_segment::with('question_segment')->get()
        ]);
    }
}
