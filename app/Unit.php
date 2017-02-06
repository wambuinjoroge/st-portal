<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    //
    protected $fillable = ['name'];

    public function faculty(){
        return $this->belongsTo('App\Faculty','faculty_id','id');
    }
}
