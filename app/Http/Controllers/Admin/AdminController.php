<?php

namespace SMS\Http\Controllers\Admin;

use Illuminate\Http\Request;
use SMS\Http\Requests\Student\StudentRequest;
use SMS\Http\Requests\Teacher\TeacherRequest;
use SMS\Http\Controllers\Controller;
use SMS\Services\AdminService;
use SMS\Models\Department;
use SMS\Models\YearLevel;
use DB;

class AdminController extends Controller
{

    private $adminService;

    function __construct(AdminService $adminService)
    {
        $this->adminService = $adminService;
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

        return redirect()->route('admin.studentList');

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
        $yearlevel = YearLevel::all();
        $section = $this->adminService->getAllSection();
        return view('admin.class',compact('yearlevel','section'));
    }

    public function class_view_id($id)
    {
        $yearlevel = YearLevel::all();
        $yearlevels = YearLevel::find($id);
        $section = $this->adminService->getAllSectionById($yearlevels);
        return view('admin.class',compact('yearlevel','section'));
    }
    public function student_list()
    {
        return view('admin.studentlist');
    }

    public function teacher_list()
    {
        return view('admin.teacher');
    }

    public function assign_teacher()
    {
        return view('admin.assign_teacher'); 
    }

}
