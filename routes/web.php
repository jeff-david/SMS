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
    Route::get('/register/teacher', 'Admin\AdminController@register_teacher')->name('admin.register_teacher');
    Route::get('/register/class', 'Admin\AdminController@class_view')->name('admin.register_class');
    Route::get('/register/studentlist','Admin\AdminController@student_list')->name('admin.studentlist');
    Route::get('/register/teacherlist','Admin\AdminController@teacher_list')->name('admin.teacher');
    Route::get('/register/assign_teacher','Admin\AdminController@assign_teacher')->name('admin.assign_teacher');
    Route::get('/register/class/{id}','Admin\AdminController@class_view_id')->name('admin.class_view_id');
    Route::post('/register/student', 'Admin\AdminController@store_student')->name('admin.register_student');
    Route::post('/register/teacher/store', 'Admin\AdminController@store_teacher')->name('admin.register_store_teacher');
  
});

Route::get('/principal', function(){
    return view('principal.dashboard');
});

Route::prefix('/principal')->group(function(){
    Route::get('/announce', 'Principal\PrincipalController@announce')->name('principal.announcement');
    Route::get('/student', 'Principal\PrincipalController@student_view')->name('principal.student');
    Route::get('/teacher', 'Principal\PrincipalController@teacher_list')->name('principal.teacher');
    
  
});


