<?php 

namespace SMS\Http\Controllers\Principal;

use Illuminate\Http\Request;
use SMS\Http\Controllers\Controller;

class PrincipalController extends Controller
{
    public function announce()
    {
        return view('principal.announcement');
    }
    public function student_view()
    {
        return view('principal.student');
    }
    public function teacher_list()
    {
        return view('principal.teacher');
    }
}