<?php 

namespace SMS\Http\Controllers\Principal;

use Illuminate\Http\Request;
use SMS\Http\Controllers\Controller;
use SMS\Services\AdminService;
use SMS\Models\Department;
use SMS\Models\YearLevel;
use SMS\Models\Student;
use SMS\Models\Section;
use SMS\Models\Teacher;
use SMS\Models\Classes;
use SMS\Models\Subject;
use DB;

class PrincipalController extends Controller
{
   

    public function dashboard()
    {
        $g7 = Student::where('year_level_id','=','1')->count();
        $g8 = Student::where('year_level_id','=','2')->count();
        $g9 = Student::where('year_level_id','=','3')->count();
        $g10 = Student::where('year_level_id','=','4')->count();
        $g11 = Student::where('year_level_id','=','5')->count();
        $g12 = Student::where('year_level_id','=','6')->count();
        return view('admin.dashboard',compact('g7','g8','g9','g10','g11','g12'));
    }

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