<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Sofa\Eloquence\Eloquence;

class LecturerEvaluation extends Model
{
    use Eloquence;
    //
    protected $fillable = [
      'lecturer_id',
      'answer_id',
      'question_id'
    ];
}
