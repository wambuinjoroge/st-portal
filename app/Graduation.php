<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Sofa\Eloquence\Eloquence;

class Graduation extends Model
{
    use Eloquence;
    //
    protected $fillable = [
        'surname',
        'first_name',
        'other_names',
        'graduation_year',
        'education_level',
        'national_id',
        'faculty_name',
        'admission_no'
    ];
}
