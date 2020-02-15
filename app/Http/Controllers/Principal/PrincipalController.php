<?php 

namespace SMS\Http\Controllers\Principal;

use Illuminate\Http\Request;
use SMS\Http\Requests\Student\StudentRequest;
use SMS\Http\Requests\Teacher\TeacherRequest;
use SMS\Http\Controllers\Controller;
use SMS\Services\PrincipalService;
use SMS\Models\Department;
use SMS\Models\YearLevel;
use SMS\Models\Student;
use SMS\Models\Section;
use SMS\Models\Teacher;
use SMS\Models\Classes;
use SMS\Models\Subject;
use SMS\Models\Announcement;
use DB;

class PrincipalController extends Controller
{
   

    public function __construct(PrincipalService $principalService)
    {
        $this->principalService = $principalService;
    }
    public function dashboard()
    {
        $g7 = Student::where('year_level_id','=','1')->count();
        $g8 = Student::where('year_level_id','=','2')->count();
        $g9 = Student::where('year_level_id','=','3')->count();
        $g10 = Student::where('year_level_id','=','4')->count();
        $g11 = Student::where('year_level_id','=','5')->count();
        $g12 = Student::where('year_level_id','=','6')->count();
        return view('principal.dashboard',compact('g7','g8','g9','g10','g11','g12'));
    }
    public function announce()
    {
        $announcement = Announcement::get();
        return view('principal.announcement',compact('announcement'));
    }

    public function post_announce(Request $request)
    {
     
        $data = $request->all();

        \DB::beginTransaction();
        try{
            $rtn = $this->principalService->store_announce($data);
    
            \DB::commit();
        }catch(\Exception $e){
            \DB::rollback();

            return redirect()->back()->withInput()->with(['failed' => 'Error in posting announcement']);
        }

        return redirect()->back()->withInput()->with('success','Successfully Posted Announcement');
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