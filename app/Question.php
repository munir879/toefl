<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

    protected $fillable = [
        'question', 'question_segment_id'
    ];

    public function questionSegmen()
    {
        return $this->belongsTo(Question_segment::class);
    }

    public function Aswers()
    {
        return $this->hasMany(Answer::class);
    }
}
