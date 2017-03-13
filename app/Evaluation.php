<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    //
    protected $fillable = [
      "faculty_name",
      "course_name",
      "year",
      "st_gender",
      "lecturer_name",
      "lec_gender"
    ];
}
