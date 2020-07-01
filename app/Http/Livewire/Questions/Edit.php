<?php

namespace App\Http\Livewire\Questions;

use Livewire\Component;
use App\Question;
use App\Question_segment;
use App\Article;
use App\Answer;


class Edit extends Component
{

    public $QuesSegmenId;
    public $QuesSegmen;
    public $CountQuestion;
    public $CountArticle;
    public $Articles;
    public $Article;
    public $Question;
    public $IdQuestions;
    public $ArticleId;
    public $answers;

    public function mount($id)
    {
        $this->IdQuestions = $id;
        $this->data();
    }

    public function data()
    {
        $data = Question::find($this->IdQuestions);
        $this->Question = $data->question;
        if ($data->article_id) {
            $this->ArticleId = $data->article_id;
            $this->updatingArticleId($data->article_id);
        }
        $this->QuesSegmenId = $data->question_segment_id;
        $this->getQuesSegmenProperty();

        foreach ($data->Aswers as $data) {
            $IdAnswer[] = $data->id;
            $Answer[] = $data->answer;
            $option[] = $data->is_correct;
        }
        $this->answers = array('id' => $IdAnswer, 'answer' => $Answer, 'option' => $option);
    }

    public function getQuesSegmenProperty()
    {
        $QuesSegmen = Question_segment::find($this->QuesSegmenId);
        $this->CountQuestion = $QuesSegmen->questions->count();
        $this->CountArticle = $QuesSegmen->articles->count();
        $this->QuesSegmen = $QuesSegmen;
        $this->Articles = $QuesSegmen->articles;
    }

    public function updatingArticleId($value)
    {
        $this->Article = Article::find($value);
    }

    public function Update()
    {

        $messages = [
            'answers.option.required' => 'need one options.',
            'answers.answer.required' => 'need one answers.',
        ];
        $this->validate([
            'answers.option' => 'required',
            'answers.answer' => 'required',
            'answers.answer.0' => 'required',
            'answers.answer.1' => 'required',
            'answers.answer.2' => 'required',
            'answers.answer.3' => 'required',
            'Question' => 'required'
        ], $messages);



        $Question = Question::find($this->IdQuestions);

        $Question->update([
            'question' => $this->Question,
            'article_id' => $this->ArticleId > 0 ? $this->ArticleId : null
        ]);


        for ($i = 0; $i <= 3; $i++) {
            $option = empty($this->answers['option'][$i]) ? false : true;
            $answer = $this->answers['answer'][$i] ?: false;
            if ($answer) {
                Answer::where('id', $this->answers['id'][$i])->update([
                    'answer' => $answer,
                    'is_correct' => $option
                ]);
            }
        }

        $this->getQuesSegmenProperty($this->QuesSegmenId);
        session()->flash('message', 'Question successfully Update.');
    }

    public function render()
    {
        return view('livewire.questions.edit');
    }
}
