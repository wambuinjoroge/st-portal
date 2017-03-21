<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Sofa\Eloquence\Eloquence;

class StudentUnit extends Model
{
    use Eloquence;

    protected $fillable = [
        'student_id',
        'unit_id'
        ];

}
