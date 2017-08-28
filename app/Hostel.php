<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hostel extends Model
{

    //one to one
    public function student(){
        return $this->belongsTo('App\Student');
    }
    public function room(){
        return $this->hasMany('App\Room');
    }

}
