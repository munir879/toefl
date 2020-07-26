<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member_test_question extends Model
{
    protected $fillable = [
        'member_test_id', 'question_id', 'answer_id'
    ];
}
