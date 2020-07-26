<?php

namespace App\Http\Livewire\Article;

use Livewire\Component;
use App\Question_segment;
use App\Article;

class Create extends Component
{

    public $QuesSegmenId;
    public $QuesSegmen;
    public $CountQuestion;
    public $CountArticle;
    public $Article;

    public function mount($id)
    {
        $this->QuesSegmenId = $id;
        $this->getQuesSegmenProperty($id);
    }

    public function getQuesSegmenProperty($id)
    {
        $QuesSegmen = Question_segment::find($id);
        $this->CountQuestion = $QuesSegmen->questions->count();
        $this->CountArticle = $QuesSegmen->articles->count();
        $this->QuesSegmen = $QuesSegmen;
    }

    public function Store()
    {

        $this->validate([
            'Article' => 'required|min:6',
        ]);

        if ($this->QuesSegmen->article_quota - $this->CountArticle < 1) {
            return session()->flash('danger', 'Quota questions limit');
        }

        $this->QuesSegmen->articles()->create([
            'content' => $this->Article,
        ]);


        session()->flash('message', 'Question successfully created.');
        $this->Questions = null;
        $this->emit('reset');
        $this->getQuesSegmenProperty($this->QuesSegmenId);
    }



    public function render()
    {
        return view('livewire.article.create');
    }
}
