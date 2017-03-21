<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Sofa\Eloquence\Eloquence;

class Question extends Model
{
    //
    use Eloquence;
    protected $fillable = [
      'question'
    ];

    public function answers(){

        return $this->hasMany('App\Answer');
    }
}
