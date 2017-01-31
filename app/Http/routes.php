<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','HomeController@checkUser');


Route::auth();
Route::get('/home', 'HomeController@index');
//admin
Route::post('admin/reports/bookings/butchers', 'Admin\AdminBookingsController@genButchersReport');
Route::get('admin','AdminController@index');
Route::get('prof','AdminController@profile');
Route::get('Units','AdminController@units');
Route::get('Hostels','AdminController@hostels');
//Response from objects
//Route::get('home', function () {
    //return response('Hello World', 200)
                  //->header('Content-Type', 'text/plain');
//});
//devfest
//Route::get('/dev', 'HomeController@display');

//DetailController
//Route::get('auth/info','DetailsController@editor');
// Route::get('index','DetailsController@index');
// Route::post('/details/create','DetailsController@store');
// Route::get('details/create','DetailsController@create');
// Route::get('/details/{id}','DetailsController@show');
// Route::get('/details/{id}/edit','DetailsController@edit');
// Route::get('/details/{id}','DetailsController@update');
// Route::get('/details/{id}','DetailsController@destroy');

//ExamController
Route::get('/exams','ExamController@index');
Route::get('exams/create','ExamController@create');
Route::post('/exams','ExamController@store');
Route::get('/exams/{id}','ExamController@show');
Route::get('/exams/{id}/edit','ExamController@edit');
Route::get('/exams/{id}','ExamController@update');
Route::get('/exams/{id}','ExamController@destroy');



//FacultyController
Route::get('/faculties','FacultyController@index');
Route::get('faculties/create','FacultyController@create');
Route::post('/faculties','FacultyController@store');
Route::get('faculty/{id}','FacultyController@show');
Route::get('/faculties/{id}/edit','FacultyController@edit');
Route::get('/faculties/{id}','FacultyController@update');
Route::get('faculty/{id}','FacultyController@destroy');

//StudentsController
Route::get('/students','StudentsController@index');
Route::post('/students/create','StudentsController@store');
Route::get('students/create','StudentsController@create');
Route::get('student/{id}','StudentsController@show');
Route::get('/students/{id}/edit','StudentsController@edit');
Route::get('/students/{id}','StudentsController@update');
Route::get('student/{id}','StudentsController@destroy');