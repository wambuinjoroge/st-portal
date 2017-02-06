<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    //faculty to students
    public function student(){
        return $this->hasMany('App\Student');
    }
    //a faculty to many units
    public function units(){
        return $this->hasMany('App\Unit','faculty_id','id');
    }
}
