<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question_segment extends Model
{
    protected $fillable = [
        'direction', 'question_quota', 'article_quota', 'test_segment_id'
    ];

    public function test_segments()
    {
        return $this->hasOne(Test_segment::class, 'id');
    }
    public function questions()
    {
        return $this->hasMany(Question::class);
    }
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
    public function test_question_segment()
    {
        return $this->hasOne(test_question_segment::class, 'id');
    }
}
