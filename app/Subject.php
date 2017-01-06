<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable=[
        'subject_code',
        'subject_name'
    ];

    public function sub_subjects(){

        return $this->hasMany('App\Sub_Subject');

    }


}
