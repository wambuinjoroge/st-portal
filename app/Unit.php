<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Unit extends Model
{
    //
//    protected $table = ['units'];
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
//        $student = App\Student::find(1);

//        foreach ($user->roles as $role) {
//            echo $role->pivot->created_at;
//        }