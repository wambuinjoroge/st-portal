<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fees extends Model
{
    //student
    public function student(){
        return $this->belongsTo('App\Student');
    }
}
