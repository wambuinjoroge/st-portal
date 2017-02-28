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
        'national_id',
        'user_id',
        'gender'
    ];
    //one to many
    public function faculty(){
    return $this->belongsTo('App\Faculty');
    }
    //one to many
    public function fees(){
        return $this->hasMany('App\Fees');
    }
    //one to one
    public function hostel(){
        return $this->hasOne('App\Hostel');
    }

}
