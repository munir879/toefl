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

<<<<<<< HEAD
=======
    public function questions()
    {
        return $this->hasManyThrough(
            Question::class,
            Question_segment::class,
            'id', // Foreign key on owners table...
            'question_segment_id',
        );
    }

>>>>>>> ccadd50c9e3c0c2bf8156cc66ad5ff7b257ad9b5
    public function test_segmen()
    {
        return $this->hasOne(Test_segment::class, 'id');
    }
}
