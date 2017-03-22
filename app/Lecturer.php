<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{

    //
    protected $fillable = [
      'lecturer_name',
      'gender',
      'faculty_id'
    ];
}
