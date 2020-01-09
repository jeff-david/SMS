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

Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::prefix('admin')->group(function(){
    Route::get('/register/student', 'Admin\AdminController@index')->name('admin.register_student');
    Route::get('/register/teacher', 'Admin\AdminController@teacher')->name('admin.register_teacher');
    Route::get('/register/class', 'Admin\AdminController@class_view')->name('admin.register_class');
    Route::get('/register/studentlist','Admin\AdminController@student_list')->name('admin.studentlist');
    Route::get('/register/teacher','Admin\AdminController@teacher_list')->name('admin.register_teacher');
  
});


