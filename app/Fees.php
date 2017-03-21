<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Sofa\Eloquence\Eloquence;

class Fees extends Model
{
    use Eloquence;
    //student
    public function student(){
        return $this->belongsTo('App\Student');
    }
}
