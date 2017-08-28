<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Graduation extends Model
{
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
