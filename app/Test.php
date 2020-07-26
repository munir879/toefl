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
    public function tets_segmen()
    {
        return $this->hasOne(Test_segment::class, 'id');
    }
}
