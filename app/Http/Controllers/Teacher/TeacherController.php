<?php 

namespace SMS\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use SMS\Http\Controllers\Controller;
use SMS\Models\Announcement;
use SMS\Models\Student;
use SMS\Services\TeacherService;

class TeacherController extends Controller
{
    private $teacherService;

    function __construct(TeacherService $teacherService)
    {
        $this->teacherService = $teacherService;
    }

    public function dashboard()
    {
        $g7 = Student::where('year_level_id','=','1')->count();
        $g8 = Student::where('year_level_id','=','2')->count();
        $g9 = Student::where('year_level_id','=','3')->count();
        $g10 = Student::where('year_level_id','=','4')->count();
        $g11 = Student::where('year_level_id','=','5')->count();
        $g12 = Student::where('year_level_id','=','6')->count();

        return view('teacher.dashboard',compact('g7','g8','g9','g10','g11','g12'));
    }

    public function announce()
    {
       
        $announcement = Announcement::where('type_id','>=',0)->pluck('type_id')->toArray();
        $announcement = $this->teacherService->announcement($announcement);

        return view('teacher.announce',compact('announcement'));
    }
    public function class_list()
    {
        return view('teacher.class');
    }

}


