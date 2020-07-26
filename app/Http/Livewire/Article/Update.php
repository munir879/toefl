<?php

namespace App\Http\Livewire\Article;

use Livewire\Component;
use App\Question_segment;
use App\Article;

class Update extends Component
{
    public $QuesSegmenId;
    public $QuesSegmen;
    public $CountQuestion;
    public $CountArticle;
    public $Article;
    public $IdArticle;

    public function mount($id)
    {
        $this->IdArticle = $id;
        $this->data();
    }

    public function data()
    {
        $Article = Article::find($this->IdArticle);
        $this->Article = $Article->content;
        $this->QuesSegmenId = $Article->question_segment_id;
        $this->getQuesSegmenProperty();
    }

    public function getQuesSegmenProperty()
    {
        $QuesSegmen = Question_segment::find($this->QuesSegmenId);
        $this->CountQuestion = $QuesSegmen->questions->count();
        $this->CountArticle = $QuesSegmen->articles->count();
        $this->QuesSegmen = $QuesSegmen;
    }

    public function Update()
    {

        $this->validate([
            'Article' => 'required|min:6',
        ]);
        Article::where('id', $this->IdArticle)
            ->update(['content' => $this->Article]);


        session()->flash('message', 'Question successfully Update.');
        $this->Questions = null;
        $this->emit('reset');
        $this->getQuesSegmenProperty();
    }

    public function render()
    {
        return view('livewire.article.update');
    }
}
