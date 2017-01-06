<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    //

//    protected $table = 'applications';

    protected $fillable = ['sinhala_name','name_initials','first_name','last_name','english_name','tamil_name','dob','nic','nationality','gender','district','address1','address2','address3','address4','postalcode','telhome','telmob','email','batch','subject1','subject2','subject3','examcenter','exammedium','almedium','alyear','alindexno','alsubject1','alsubject2','alsubject3','oq','oqinstitute','oqcoursetype','oqperiod','oqquayear','oqquaday','employee','quaforrelease','quacomyear','quacommonth'];


//    public function reg(){
//
//        return $this->hasOne('App\Application');
//    }
}
