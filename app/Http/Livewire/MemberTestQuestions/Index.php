<?php

namespace App\Http\Livewire\MemberTestQuestions;

use Livewire\Component;
use App\Test;
use App\Test_segment;

class Index extends Component
{
    public $Test;
    public $TestSegmen;
    public $QuesionSegmen;






    public function mount(Test $id)
    {
        $this->Test = $id;
    }



    public function render()
    {
        return view('livewire.member-test-questions.index');
    }
}
