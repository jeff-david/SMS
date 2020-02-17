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



Route::get('/login/admin','Auth\LoginController@showAdminLoginForm');
Route::get('/login/parent','Auth\LoginController@showParentLoginForm');
Route::get('/login/principal','Auth\LoginController@showPrincipalLoginForm');
Route::get('/logout','Auth\LoginController@logout')->name('logout'); 
Route::get('/login/teacher','Auth\LoginController@showTeacherLoginForm');
Route::post('/login/teacher','Auth\LoginController@teacherLogin')->name('teacher.login');
Route::post('/parent/login','Auth\LoginController@parentLogin')->name('parent.login');
Route::post('/principal/login','Auth\LoginController@principalLogin')->name('principal.login'); 
Route::post('/login/admin','Auth\LoginController@adminLogin')->name('admin.login'); 

Route::prefix('admin')->middleware('auth:admin')->group(function(){
    Route::get('/', 'Admin\AdminController@dashboard')->name('admin.dashboard');
    Route::get('/register/student', 'Admin\AdminController@index')->name('admin.register_student');
    Route::get('/register/teacher', 'Admin\AdminController@register_teacher')->name('admin.register_teacher');
    Route::get('/register/class', 'Admin\AdminController@class_view')->name('admin.register_class');
    Route::get('/register/studentlist','Admin\AdminController@student_list')->name('admin.studentlist');
    Route::get('/register/teacherlist','Admin\AdminController@teacher_list')->name('admin.teacher');
    Route::get('/assign_teacher/{id}','Admin\AdminController@assign_teacher')->name('admin.assign_teacher');
    Route::get('/assign_teacher/getTeacher/{id}','Admin\AdminController@get_teacher');
    Route::get('/register/student/edit/{id}','Admin\AdminController@student_edit')->name('admin.student_edit');
    Route::get('/register/teacher/edit/{id}','Admin\AdminController@teacher_edit')->name('admin.teacher_edit');
    Route::get('/class/{id}','Admin\AdminController@view_section')->name('admin.view_section');
    Route::get('/announcement','Admin\AdminController@announcement')->name('admin.announcement');
    Route::get('/settings','Admin\AdminController@settings')->name('admin.settings');
    Route::post('/change_settings/{id}','Admin\AdminController@change_settings')->name('admin.change_settings');
    Route::post('/send_message','Admin\AdminController@send_message')->name('admin.send_message');
    Route::post('/announcement','Admin\AdminController@post_announcement')->name('admin.post_announcement');
    Route::post('/register/student', 'Admin\AdminController@store_student')->name('admin.register_student');
    Route::post('/register/teacher/store', 'Admin\AdminController@store_teacher')->name('admin.register_store_teacher');
    Route::post('/assign_teacher/store/{id}', 'Admin\AdminController@store_assign')->name('admin.store_assign');
    Route::post('/student/update/{id}', 'Admin\AdminController@student_update')->name('admin.student_update');
    Route::post('/teacher/update/{id}', 'Admin\AdminController@teacher_update')->name('admin.teacher_update');
});



Route::prefix('/principal')->middleware('auth:principal')->group(function(){
    Route::get('/', 'Principal\PrincipalController@dashboard')->name('principal.dashboard');
    Route::get('/announce', 'Principal\PrincipalController@announce')->name('principal.announcement');
    Route::get('/student', 'Principal\PrincipalController@student_view')->name('principal.student');
    Route::get('/teacher', 'Principal\PrincipalController@teacher_list')->name('principal.teacher');
    Route::get('/settings', 'Principal\PrincipalController@teacher_list')->name('principal.settings');
    Route::post('/announce', 'Principal\PrincipalController@post_announce')->name('principal.post_announcement');
    
  
});

Route::get('/parent', function(){
    return view('parent.dashboard');
});


Route::prefix('parent')->group(function(){
    Route::get('/announce', 'Parent\ParentController@announcement')->name('parent.announcement');
    Route::get('/grade', 'Parent\ParentController@grade')->name('parent.grade');
    Route::get('/profile', 'Parent\ParentController@profile')->name('parent.profile');
    Route::get('/concern', 'Parent\ParentController@concern')->name('parent.concern');
    Route::get('/settings', 'Parent\ParentController@concern')->name('parent.settings');


    
  
});

Route::get('/teacher', function(){
    return view('teacher.dashboard');
});

Route::prefix('teacher')->group(function(){
    Route::get('/announce', 'Teacher\TeacherController@announce')->name('teacher.announce');
    Route::get('/class', 'Teacher\TeacherController@class_list')->name('teacher.class');
    Route::get('/settings', 'Teacher\TeacherController@class_list')->name('teacher.settings');


    
  
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


