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
//Response from objects
//Route::get('home', function () {
    //return response('Hello World', 200)
                  //->header('Content-Type', 'text/plain');
//});
//devfest
//Route::get('/dev', 'HomeController@display');

//API
Route::get('names','RoomController@index');
Route::get('names/{id}',function ($id){
   $names = array(
    1 => "John",
    2 => "Mary",
    3 => "Steven"
   );
   return array($id => $names[$id]);
});
Route::get('/','HomeController@checkUser');


Route::auth();
Route::get('home', 'HomeController@index');
//admin
Route::post('admin/reports/bookings/butchers', 'Admin\AdminBookingsController@genButchersReport');
Route::get('admin','AdminController@index');
Route::get('prof','AdminController@profile');
Route::get('Units','AdminController@units');
Route::get('Hostels','AdminController@hostels');

//ExamController
Route::get('/exams','ExamController@index');
Route::get('exams/create','ExamController@create');
Route::post('/exams','ExamController@store');
Route::get('/exams/{id}','ExamController@show');
Route::get('/exams/{id}/edit','ExamController@edit');
Route::post('/exams/{id}','ExamController@update');
Route::get('/exams/{id}','ExamController@destroy');

//CommentsController
Route::get('comments','CommentsController@index');
Route::get('create/comment','CommentsController@create');
Route::post('comment','CommentsController@store');

//QuestionController
Route::get('create','QuestionController@create_evaluation');
Route::post('evaluation','QuestionController@store');
//Route::get('evaluations','QuestionController@evaluations');
Route::get('evaluate','QuestionController@evaluate');
Route::get('lecturers','QuestionController@index');
//Route::get('evaluate/{id}','QuestionController@one');


//StudentsController
Route::get('/students','StudentsController@index');
Route::get('graduands','StudentsController@graduands');
Route::get('students/create','StudentsController@create');
Route::post('/students/create','StudentsController@store');
Route::get('student/{id}','StudentsController@show');
Route::get('student/{id}/units','StudentsController@show2');

Route::get('graduation','StudentsController@stGraduation');
Route::post('st-graduation','StudentsController@graduation');
Route::get('graduand/{id}','StudentsController@showGrad');

Route::get('/students/{id}/edit','StudentsController@edit');
Route::post('/students/{id}','StudentsController@update');
Route::get('students/{id}','StudentsController@destroy');

//UnitsController
Route::get('units','UnitsController@index');
Route::get('units/create','UnitsController@create');
Route::post('units','UnitsController@store');

Route::get('unit/{id}','UnitsController@show');
Route::get('/unit/{id}/edit','UnitsController@edit');
Route::post('/units/{id}','UnitsController@update');
Route::get('units/{id}','UnitsController@destroy');

//HostelsController
Route::get('hostels','HostelsController@index');
Route::get('student-hostels','HostelsController@hostels');
Route::get('hostels/create','HostelsController@create');
Route::post('hostels','HostelsController@store');

Route::get('hostel/{id}','HostelsController@show');
Route::get('hostel/{id}/students','HostelsController@show2');

Route::get('hostels/edit/{id}','HostelsController@edit');
Route::post('hostels/{id}','HostelsController@update');
Route::get('hostels/{id}','HostelsController@destroy');

Route::get('myHostels','HostelsController@stHostels');
Route::post('myHostel','HostelsController@myHostels');

Route::get('myRoom','HostelsController@stRoom');
Route::post('room','HostelsController@myRoom');


//FacultyController
Route::get('/faculties','FacultyController@index');
Route::get('faculties/create','FacultyController@create');
Route::post('/faculties','FacultyController@store');

Route::get('student-units/{id}','FacultyController@stUnits');
Route::post('myUnits','FacultyController@myUnits');
Route::get('faculty/{id}/students','FacultyController@show2');
Route::get('faculty/{id}','FacultyController@show');
Route::get('/faculties/{id}/edit','FacultyController@edit');
Route::post('/faculties/{id}','FacultyController@update');

Route::get('faculties/delete/{id}','FacultyController@destroy');

//FeesController
Route::get('fees','FeesController@index');
Route::get('fees/create/{student_id}','FeesController@create');
//Route::post('fees/{student_id}','FeesController@store');
Route::post('fees/store','FeesController@store');
//Route::get('fees/{student_id}','FeesController@show');
Route::get('fees/{id}','FeesController@show');
Route::get('fees/edit/{id}','FeesController@edit');
Route::post('fees/update/{id}','FeesController@update');
//Route::get('fees/{id}','FeesController@destroy');


//TransactionsController
Route::get('transactions','TransactionsController@index');
Route::get('transactions/create','TransactionsController@create');
Route::post('transactions','TransactionsController@store');
Route::get('transactions/{id}','TransactionsController@show');
Route::get('transactions/edit/{id}','TransactionsController@edit');
Route::post('transactions/{id}','TransactionsController@update');
Route::get('transactions/{id}','TransactionsController@destroy');

Route::post('name/post','TransactionsController@receiver');

Route::get('dashboard', function () {
     return view('auth.dashboard');
 });

Route::get('evaluation', function () {
    return view('student.evaluation');
});
