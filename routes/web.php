<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});

Route::get('student','StudentController@allstudents');

Route::get('student/create','StudentController@create');

Route::post('student', 'StudentController@store');

Route::get('fees','FeesController@allpayments');

Route::get('fees/create','FeesController@create');

Route::post('fees', 'FeesController@store');

Route::get('fees/search','FeesController@look');

Route::post('fees/search','FeesController@search');




