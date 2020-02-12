<?php

namespace SMS\Http\Controllers\Admin;

use Illuminate\Http\Request;
use SMS\Http\Requests\Student\StudentRequest;
use SMS\Http\Requests\Teacher\TeacherRequest;
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

class AdminController extends Controller
{

    private $adminService;

    function __construct(AdminService $adminService)
    {
        $this->adminService = $adminService;
    }
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
    public function index()
    {
        return view('admin.register_student');
    }

    public function store_student(StudentRequest $request)
    {
        $data = $request->all();

        \DB::beginTransaction();
        try
        {
            $save = $this->adminService->store($data);
            \DB::commit(); 
        }catch(\Exception $th)
        {
            \DB::rollback();

            return redirect()->back()->withInput()->withErrors(['failed'=>'Error in registering the students']);
        }

        return redirect()->route('admin.studentlist');

    }

    public function register_teacher()
    {
        $departments = Department::all();
        return view('admin.register_teacher',compact('departments'));
    }

    public function store_teacher(TeacherRequest $request)
    {
        $data = $request->all();

        \DB::beginTransaction();

        try
        {
            $save = $this->adminService->store_teacher($data);
            \DB::commit(); 
        }catch(\Exception $th)
        {
            \DB::rollback();

            return redirect()->back()->withInput()->withErrors(['failed'=>'Error in registering the teachers']);
        }

        return redirect()->route('admin.teacher');
    }

    public function class_view()
    {
        $class = Classes::all();
        return view('admin.class',compact('class'));
    }

    public function view_section(Request $request, $id)
    {
        $section = $this->adminService->get_Section($id);
        
        return view('admin.view_section', compact('section'));
    }

   
    public function student_list()
    {
        $student = Student::select('students.*','year_levels.yearlevel')
                    ->join('year_levels','students.year_level_id', '=', 'year_levels.id')
                    ->distinct()
                    ->get();
        return view('admin.studentlist', compact('student'));
    }

    public function student_edit($id)
    {
        $student = Student::findOrFail($id);
        
        return view('admin.edit', compact('student'));
    }

    public function student_update(StudentRequest $request,$id)
    {
        $data = $request->all();
        $data['id'] = $id;
        
        \DB::beginTransaction();
        try{
            $this->adminService->student_update($data);
            \DB::commit();
        }catch(\Exception $e){
            \DB::rollback();

            return redirect()->back()->withInput()->with(['failed' => 'Please fill up the forms']);
        }

        return redirect()->route('admin.studentlist');
    }

    public function teacher_list()
    {
        $teacher = Department::join('teachers', 'teachers.departments_id', '=', 'departments.id')
                    ->select('teachers.*','departments.department_name')
                    ->get();

        return view('admin.teacher',compact('teacher'));
    }

    public function teacher_edit($id)
    {

        $teacher = Teacher::findOrFail($id);
        return view('admin.teacher_edit', compact('teacher'));
    }

    public function teacher_update(TeacherRequest $request,$id)
    {
        $data = $request->all();
        $data['id'] = $id;
        
        \DB::beginTransaction();
        try{
            $this->adminService->teacher_update($data);
            \DB::commit();
        }catch(\Exception $e){
            \DB::rollback();

            return redirect()->back()->withInput()->withErrors(['failed' => 'Please fill up the forms']);
        }

        return redirect()->route('admin.teacher');
    }

    public function assign_teacher($id)
    {    
        $subject = $this->adminService->get_Subject($id);
     
        return view('admin.assign_teacher',compact('subject','id')); 
    }   

    public function get_teacher($id)
    {
        $teacher = DB::table('teachers')->where('departments_id', $id)->pluck('lastname','id');
        return json_encode($teacher);
    }

    public function store_assign(Request $request,$id)
    {
        $data = $request->all();

        \DB::beginTransaction();
        try{
            $rtn = $this->adminService->store_assign($data,$id);
            if ($rtn) {
                $this->adminService->update_teacher_handle($data);
            }

            \DB::commit();
        }catch(\Exception $e){
            \DB::rollback();

            return redirect()->back()->withInput()->with(['failed' => 'Please assign teacher']);
        }

        return redirect()->route('admin.teacher')->with('success','Successfully Assign Teacher');
    }

}
