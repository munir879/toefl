<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = [
        'name', 'is_active',
    ];

    public function question_segments()
    {
        return $this->belongsToMany(Question_segment::class, test_question_segment::class);
    }
}
