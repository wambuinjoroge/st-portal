<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Sofa\Eloquence\Eloquence;

class Hostel extends Model
{
    use Eloquence;
    //one to one
    public function student(){
        return $this->belongsTo('App\Student');
    }
    public function room(){
        return $this->hasMany('App\Room');
    }

}
