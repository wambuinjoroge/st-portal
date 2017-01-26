<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    //faculty to students
    public function student(){
        return $this->hasMany('App\Student');
    }
}
