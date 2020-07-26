<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class test_question_segment extends Model
{
    protected $fillable = [
        'test_id', 'question_segment_id'
    ];

    public $timestamps = false;

    public function question_segment()
    {
        return $this->hasOne(Question_segment::class, 'id', 'question_segment_id');
    }

    public function test_segmen()
    {
        return $this->hasOne(Test_segment::class, 'id');
    }
}
