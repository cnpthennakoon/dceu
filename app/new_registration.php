<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class new_registration extends Model
{
    protected $fillable = [

        'english_name','dob','nic','gender',
        'district','address1','address2','address3','address4','postalcode',
        'telhome','telmob','email','batch','subject1','subject2','subject3','examcenter',
        'almedium','alyear','alindexno','alsubject1','alsubject2','alsubject3',
         'z_score', 'al_sub1_result', 'al_sub2_result',
        'al_sub3_result', 'status'
];
}
