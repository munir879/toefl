<?php

namespace App\Http\Livewire\Member;

use Livewire\Component;
use App\Test as Tes;
use App\Test_segment;
<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Builder;
>>>>>>> ccadd50c9e3c0c2bf8156cc66ad5ff7b257ad9b5

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
<<<<<<< HEAD
        return view('livewire.member.test', [
            'test' => Tes::with('question_segments')->where('is_active', true)->get()
        ]);
=======
        $IdMember = \Auth::id();
        $test = Tes::with('question_segments')

            ->whereDoesntHave('Member_test', function (Builder $query) use ($IdMember) {
                $query->where('member_id', $IdMember);
                $query->whereNotNull('score');
            })
            ->where('is_active', true)
            ->get();

        return view('livewire.member.test', compact('test'));
>>>>>>> ccadd50c9e3c0c2bf8156cc66ad5ff7b257ad9b5
    }
}
