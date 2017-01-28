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
Route::get('index','DetailsController@index');
Route::post('/details/create','DetailsController@store');
Route::get('details/create','DetailsController@create');

//ExamController
Route::get('/exams','ExamController@index');
Route::get('exams/create','ExamController@create');
Route::post('/exams','ExamController@store');

//FacultyController
Route::get('/faculties','FacultyController@index');
Route::get('/faculties/create','FacultyController@create');
Route::post('/faculties','FacultyController@store');
Route::get('/faculties/{id}','FacultyController@show');
Route::get('/faculties/{id}/edit','FacultyController@edit');
Route::post('/faculties/{id}','FacultyController@update');
Route::get('/faculties/{id}','FacultyController@destroy');

//studentscontroller
Route::get('/students','StudentsController@index');
Route::get('/students/create','StudentsController@create');
Route::post('/students','StudentsController@store');
Route::get('/students/{id}','StudentsController@show');
Route::get('/students/{id}/edit','StudentsController@edit');
Route::post('/students/{id}','StudentsController@update');
Route::get('/students/{id}','StudentsController@destroy');
