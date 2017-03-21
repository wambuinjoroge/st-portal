<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Sofa\Eloquence\Eloquence;

class Course extends Model
{
    use Eloquence;
    //
    protected $fillable = [
      'course_name',
      'faculty_id'
    ];
}
