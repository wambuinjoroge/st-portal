<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Sofa\Eloquence\Eloquence;

class Room extends Model
{
    //
    use Eloquence;

    protected $table = 'rooms';
    protected $fillable = [
        'status'
    ];

    public function isOccupied($status){
        return ($status == 1) ? true : false ;
    }

    public function hostel(){
        return $this->belongsTo('App/Hostel');
    }

    public function student(){
        return $this->belongsTo('App/Student');
    }
}
