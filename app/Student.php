<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Sofa\Eloquence\Eloquence;

class Student extends Model
{

    use Eloquence;

	 protected $fillable = [
        'name',
        'admission_number',
        'date_of_birth',
        'faculty_id',
        'national_id',
        'user_id',
        'hostel_id',
        'room_id',
        'graduation_id',
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
    public function room(){
        return $this->hasOne('App\Room');
    }
    public function units()
    {
        return $this->belongsToMany('App\Unit')
            ->withTimestamps();

    }
}
