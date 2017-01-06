<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    protected $fillable = [
         'batch', 'subject1', 'subject2', 'subject3', 'examcenter','exammedium','district','address1','address2','address3','address4',
    ];

//    public function Personal_Details(){
//
//        return $this->belongsTo('App\Personal_Details');
//
//    }
//
    public function user(){

        return $this->hasOne('App\User');

    }

}
