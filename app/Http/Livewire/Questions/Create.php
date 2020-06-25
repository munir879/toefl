<?php

namespace App\Http\Livewire\Questions;

use Livewire\Component;
use App\Question_segment;
use App\Question;
use App\Article;

class Create extends Component
{

    public $QuesSegmen;
    public $CountQuestion;
    public $CountArticle;
    public $Questions;
    public $QuesSegmenId;
    public $Articles;
    public $ArticleId = 0;
    public $Article;
    public $answers = array('answer' => '', 'option' => '');




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
        $this->Articles = $QuesSegmen->articles;
    }

    public function updatingArticleId($value)
    {
        $this->Article = Article::find($value);
    }

    public function Store()
    {

        $messages = [
            'answers.option.required' => 'need one options.',
            'answers.answer.required' => 'need one answers.',
        ];
        $this->validate([
            'answers.option' => 'required',
            'answers.answer' => 'required',
            'answers.answer.1' => 'required',
            'answers.answer.2' => 'required',
            'answers.answer.3' => 'required',
            'answers.answer.4' => 'required',
            'Questions' => 'required'
        ], $messages);

        if ($this->QuesSegmen->question_quota - $this->CountQuestion < 1) {
            return session()->flash('danger', 'Quota questions limit');
        }


        $Question = Question::create([
            'question_segment_id' => $this->QuesSegmen->id,
            'question' => $this->Questions,
            'article_id' => $this->ArticleId > 0 ? $this->ArticleId : null
        ]);
        for ($i = 1; $i <= 4; $i++) {
            $option = empty($this->answers['option'][$i]) ? false : true;
            $answer = $this->answers['answer'][$i] ?: false;
            if ($answer) {
                $Question->Aswers()->create([
                    'answer' => $answer,
                    'is_correct' => $option
                ]);
            }
            $this->answers['answer'][$i] = null;
        }
        $this->ArticleId = 0;
        $this->Questions = null;
        $this->emit('reset');
        $this->getQuesSegmenProperty($this->QuesSegmenId);
        session()->flash('message', 'Question successfully created.');
    }


    public function render()
    {
        return view('livewire.questions.create');
    }
}
