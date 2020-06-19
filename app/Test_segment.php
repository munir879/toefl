<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test_segment extends Model
{
    protected $fillable = [
        'name',
    ];
    public $timestamps = false;

    public function QuestionSegmentTest()
    {
        return $this->hasOne(Question_segment::class);
    }
}
