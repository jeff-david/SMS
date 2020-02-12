<?php 

namespace SMS\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use SMS\Http\Controllers\Controller;

class TeacherController extends Controller
{
    public function announce()
    {
        return view('teacher.announce');
    }
    public function class_list()
    {
        return view('teacher.class');
    }

}


