<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member_test extends Model
{

    protected $fillable = [
        'member_id', 'test_id', 'score'
    ];

    protected $table = 'member_test';
}
