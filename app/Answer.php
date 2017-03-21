<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Sofa\Eloquence\Eloquence;

class Answer extends Model
{
    use Eloquence;
    //
    protected $fillable = [
      'question_id',
      'answer'
    ];


}
