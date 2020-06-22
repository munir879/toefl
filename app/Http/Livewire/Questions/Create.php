<?php

namespace App\Http\Livewire\Questions;

use Livewire\Component;
use App\Question_segment;
use App\Question;

class Create extends Component
{
    public $add = true;
    public $QuesSegmen;
    public $CountQuestion;
    public $CountArticle;
    public $Questions;
    public $answers = array('answer' => '', 'option' => '');




    public function mount(Question_segment $id)
    {

        $this->CountQuestion = $id->questions->count();
        $this->CountArticle = $id->articles->count();
        $this->QuesSegmen = $id;
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



        $Question = Question::create([
            'question_segment_id' => $this->QuesSegmen->id,
            'question' => $this->Questions,
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

        session()->flash('message', 'Question successfully created.');
        $this->Questions = null;
        $this->emit('reset');
    }

    public function AddArticleQuestion()
    {
        $this->QuesArticle++;
    }

    public function AddQuesArticleAnswer()
    {
        $this->QuesArticleAnswer++;
    }
    public function render()
    {
        return view('livewire.questions.create');
    }
}
