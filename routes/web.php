<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
    $i = mt_rand(App\Employee::first()->id, App\Employee::orderBy('id','desc')->first()->id);
    $emp = App\Employee::where('id',$i)->first();

    $imgs = ['images/i1.png','images/i2.png','images/i3.png','images/i4.png'];
    $i = mt_rand(0, count($imgs)-1);
    $img = $imgs[$i];

    return view('home',compact('emp','img'));
});

Route::view('/about', 'about')->name('about');

// Route::get('/employees', 'EmployeeController@index');
// Route::get('/employees/create', 'EmployeeController@create');
// Route::post('/employees', 'EmployeeController@store');
// Route::get('/employees/{employee}', 'EmployeeController@show');
// Route::get('/employees/{employee}/edit', 'EmployeeController@edit');
// Route::put('/employees/{employee}', 'EmployeeController@update');
// Route::delete('/employees/{employee}', 'EmployeeController@destroy');

Route::resource('employees','EmployeeController');

Route::get('/contact','ContactFormController@index')->name('contact.index');
Route::get('/contact/create','ContactFormController@create')->name('contact.create');
Route::post('/contact','ContactFormController@store')->name('contact.store');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
