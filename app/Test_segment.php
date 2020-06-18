<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test_segment extends Model
{
    protected $fillable = [
        'name',
    ];

    public function question_segment()
    {
        return $this->hasOne(Question_segment::class);
    }
    public function test()
    {
        return $this->hasOne(Test::class);
    }
}
