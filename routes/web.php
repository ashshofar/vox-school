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

Route::get('/', function () {
    return view('welcome');
});


// Route::group(['prefix' => 'organizer'], function() {
//     Route::get('/', 'OrganizerController@index')->name('organizer.index');
//     Route::get('/create', 'OrganizerController@create')->name('organizer.create');
//     Route::post('/store', 'OrganizerController@store')->name('organizer.store');
// });

Route::group(['prefix' => 'school'], function() {
    Route::get('/', 'SchoolController@index')->name('school.index');
    Route::get('/show/{id}', 'SchoolController@show')->name('school.show');
    Route::get('/create', 'SchoolController@create')->name('school.create');
    Route::post('/store', 'SchoolController@store')->name('school.store');
    Route::get('/edit/{id}', 'SchoolController@edit')->name('school.edit');
    Route::post('/update/{id}', 'SchoolController@update')->name('school.update');
    Route::get('/delete/{id}', 'SchoolController@delete')->name('school.delete');
});

Route::group(['prefix' => 'student'], function() {
    Route::get('/create', 'StudentController@create')->name('student.create');
    Route::post('/store', 'StudentController@store')->name('student.store');
    Route::get('/edit/{id}', 'StudentController@edit')->name('student.edit');
    Route::post('/update/{id}', 'StudentController@update')->name('student.update');
    Route::get('/delete/{id}', 'StudentController@delete')->name('student.delete');
});
