<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question_segment extends Model
{
    protected $fillable = [
        'direction', 'question_quota', 'article_quota'
    ];

    public function test_segments()
    {
        return $this->hasOne(Test_segment::class);
    }
}
