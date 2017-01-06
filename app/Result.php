<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable = [
        'sub_subject_id', 'user_id', 'marks', 'attempt', 'attempt', 'year'
    ];

//    public function resu(){
//
//        return $this->belongsTo('App\Sub_Subject');
//
//    }
    public function sub_subject(){

        return $this->belongsTo('App\Sub_Subject');

    }
}