<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Nicolaslopezj\Searchable\SearchableTrait;
//use Sofa\Eloquence\Eloquence;

class Faculty extends Model
{
//    use Eloquence;
//    use  SearchableTrait;
//
//    protected $searchable = [
//        'columns' => [
//            'faculties.head' => 10,
//            'faculties.name' => 10,
//            'students.name' =>10,
//            'students.national_id' =>5,
//            'students.email' => 10,
//            'students.date_of_birth' => 5,
//            'students.admission_number' => 5,
//            'students.gender' => 3,
//            'units.name' => 3,
//        ],
//        'joins' => [
//
//            ['faculties.id','students.faculty_id'],
//            ['faculties.id','units.faculty_id']
//
//        ]
//    ];

    //faculty to students
    public function student(){
        return $this->hasMany('App\Student');
    }
    //a faculty to many units
    public function units(){
        return $this->hasMany('App\Unit','faculty_id','id');
    }
}
