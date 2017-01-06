<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'english_name', 'email', 'password', 'role_id', 'photo_id', 'is_active','level','student_id','telmob'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role(){

        return $this->belongsTo('App\Role');

    }

    public function photo(){

        return $this->belongsTo('App\Photo');

    }

//    middleware

    public function isAdmin(){

        if($this->role->name == "administrator" && $this->is_active == 1){

            return true;
        }

        return false;

    }


    public function isDataEntry(){

        if($this->role->name == "data entry operator" && $this->is_active == 1){

            return true;
        }

        return false;

    }

    public function isStudent(){

        if($this->role->name == "student" && $this->is_active == 1){

            return true;
        }

        return false;

    }

    public function isLecturer(){

        if($this->role->name == "lecturer" && $this->is_active == 1){

            return true;
        }

        return false;

    }
//relationships



    public function notices(){

        return $this->hasMany('App\Notice');

    }

    public function address(){

        return $this->hasOne('App\Address');

    }

//check
    public function student(){

        return $this->belongsTo('App\Student');

    }

    public function personal_details(){

        return $this->hasOne('App\Personal_Details');

    }



    public function contact_details(){

        return $this->belongsTo('App\Contact_Details');

    }

    public function results(){

        return $this->belongsTo('App\Result');

    }
    public function subject(){

        return $this->hasMany('App\Subject');

    }

    public function result(){

        return $this->hasMany('App\Result');

    }

}
