<?php

namespace App\Http\Livewire\Article;

use Livewire\Component;
use App\Question_segment;
use App\Article;

class Index extends Component
{
    public $article;
    public $confirming;
    public $Question_segment;

    public function mount($id)
    {
        $this->Question_segment = $id;
        $this->data($id);
    }

    public function data($id)
    {
        $data = Question_segment::find($id);
        if (is_null($data)) {
            return abort(404);
        }
        $this->article = $data->articles;
    }

    public function confirmDelete($id)
    {
        $this->confirming = $id;
    }

    public function kill($id)
    {
        Article::destroy($id);
        $this->data($this->Question_segment);
        session()->flash('message', 'Test successfully deleted.');
    }

    public function render()
    {
        return view('livewire.article.index');
    }
}
