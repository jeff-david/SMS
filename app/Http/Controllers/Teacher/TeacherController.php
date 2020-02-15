<?php 

namespace SMS\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use SMS\Http\Controllers\Controller;
use SMS\Models\Announcement;
use SMS\Services\TeacherService;

class TeacherController extends Controller
{
    private $teacherService;

    function __construct(TeacherService $teacherService)
    {
        $this->teacherService = $teacherService;
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


