<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Examination_Center extends Model
{
    protected $fillable = [
        'name'
    ];
    public function student(){

        return $this->hasMany('App\Student');

    }
}
