<?php

namespace App\Http\Livewire\Member;

use Livewire\Component;
use App\Test as Tes;
use App\Test_segment;

class Test extends Component
{

    protected $listeners = [
        'testStore' => 'testStore', 'testUpdate' => 'testupdate'
    ];
    public $confirming;

    public function testStore()
    {
        session()->flash('message', 'Test successfully created.');
    }

    public function testupdate()
    {
        session()->flash('message', 'Test successfully updated.');
    }

    public function confirmDelete($id)
    {
        $this->confirming = $id;
    }

    public function kill($id)
    {
        Test::destroy($id);
        session()->flash('message', 'Test successfully deleted.');
    }

    public function name($id)
    {
        return Test_segment::find($id)->name;
    }


    public function render()
    {
        return view('livewire.member.test', [
            'test' => Tes::with('question_segments')->where('is_active', true)->get()
        ]);
    }
}