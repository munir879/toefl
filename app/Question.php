<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

    protected $fillable = [
        'question', 'question_segment_id', 'article_id'
    ];

    public function questionSegmen()
    {
        return $this->belongsTo(Question_segment::class);
    }

    public function Aswers()
    {
        return $this->hasMany(Answer::class);
    }

    public function Article()
    {
        return $this->hasOne(Article::class, 'id');
    }

    public function member_test_question()
    {
        return $this->hasOne(Member_test_question::class);
    }
<<<<<<< HEAD
=======

    public function MemberTestQuestions()
    {
        return $this->hasMany(Member_test_question::class, 'id');
    }
>>>>>>> ccadd50c9e3c0c2bf8156cc66ad5ff7b257ad9b5
}
