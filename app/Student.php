<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
	 protected $fillable = [
        'name',
        'admission_number',
        'date_of_birth',
        'faculty_id',
        'national_id'
    ];
    //one to many
    public function faculty(){
    return $this->belongsTo('App\Faculty');
    }

    public function fees(){
        return $this->hasMany('App\Fees');
    }

}
