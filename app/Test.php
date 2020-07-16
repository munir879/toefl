<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Test extends Model
{
    protected $fillable = [
        'name', 'is_active', 'time'
    ];

    public function question_segments()
    {
        return $this->belongsToMany(Question_segment::class, test_question_segment::class);
    }
    public function tets_segmen()
    {
        return $this->hasOne(Test_segment::class, 'id');
    }
    public function Member_test()
    {
        return $this->hasMany(Member_test::class, 'test_id');
    }

    public function Member_score()
    {
        return $this->hasOne(Member_test::class, 'test_id');
    }
}
