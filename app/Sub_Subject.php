<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sub_Subject extends Model
{
    protected $fillable=[
        'sub_subject_code',
        'sub_subject_name',
        'subject_code',
        'level'
    ];
    public function subject(){

        return $this->belongsTo('App\Subject');

    }

    public function results(){

        return $this->hasMany('App\Result');

    }
}
