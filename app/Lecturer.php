<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Sofa\Eloquence\Eloquence;

class Lecturer extends Model
{
    use Eloquence;
    //
    protected $fillable = [
      'lecturer_name',
      'gender',
      'faculty_id'
    ];
}
