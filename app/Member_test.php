<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member_test extends Model
{

    protected $fillable = [
        'member_id', 'test_id', 'score'
    ];

    protected $table = 'member_test';
<<<<<<< HEAD
=======

    public function MemberTestQuestion()
    {
        return $this->hasMany(Member_test_question::class);
    }

    public function Test()
    {
        return $this->hasOne(Test::class, 'id');
    }

    public function member()
    {
        return $this->hasOne(Member::class, 'id', 'member_id');
    }
>>>>>>> ccadd50c9e3c0c2bf8156cc66ad5ff7b257ad9b5
}
