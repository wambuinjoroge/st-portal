<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LecturerEvaluation extends Model
{

    //
    protected $fillable = [
      'lecturer_id',
      'answer_id',
      'question_id'
    ];
}
