<?php

namespace App\Http\Livewire\Questions;

use Livewire\Component;

class Article extends Component
{
    public $number = 1;
    public $article = 1;

    protected $listeners = [
        'AddArticle' => 'AddArticle',
    ];

    public function AddArticle()
    {
        $this->article++;
    }

    public function render()
    {
        return view('livewire.questions.article');
    }
}
