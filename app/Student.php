<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //one to many
    public function faculty(){
    return $this->belongsTo('App\Faculty');
    }

}
