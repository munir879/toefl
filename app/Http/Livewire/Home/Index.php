<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;

class Index extends Component
{
    public $addedMessageVisible = false;
    public $data;

    protected $listeners = ['postAdded' => 'showPostAddedMessage'];

    public function showPostAddedMessage()
    {
        $validatedData = $this->validate([
            'data' => ['required', 'email'],
        ]);
        session()->flash('status', 'Post successfully updated.');
    }
    public function render()
    {
        return view('livewire.home.index');
    }
}
