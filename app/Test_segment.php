<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test_segment extends Model
{
    protected $fillable = [
        'name',
    ];

    public $Addques = false;

    public $timestamps = false;

    public function question_segment()
    {
        return $this->hasOne(Question_segment::class);
    }
}
