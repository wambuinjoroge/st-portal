<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Sofa\Eloquence\Eloquence;

class Faculty extends Model
{
    use Eloquence;

    //faculty to students
    public function student(){
        return $this->hasMany('App\Student');
    }
    //a faculty to many units
    public function units(){
        return $this->hasMany('App\Unit','faculty_id','id');
    }
}
