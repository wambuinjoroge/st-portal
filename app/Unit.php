<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Unit extends Model
{

    protected $fillable = ['name'];

    public function faculty(){
        return $this->belongsTo('App\Faculty','faculty_id','id');
    }
    public function students()
    {
        return $this->belongsToMany('App\Student')
            ->withTimestamps();

    }

}
