<?php

namespace SMS\Http\Controllers\Admin;

use Illuminate\Http\Request;
use SMS\Http\Requests\Student\StudentRequest;
use SMS\Http\Controllers\Controller;
use SMS\Services\AdminService;
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

            return view('admin.dashboard');  
        }catch(\Exception $th)
        {
            \DB::rollback();

            return redirect()->back()->withInput()->withErrors(['failed'=>'Error in registering the students']);
        }

    }

    public function teacher()
    {
        return view('admin.register_teacher');
    }

<<<<<<< HEAD
=======
    public function class_view()
    {
        return view('admin.class');
    }
    public function student_list()
    {
        return view('admin.studentlist');
    }
    public function teacher_list()
    {
        return view('admin.teacher');
    }

>>>>>>> c8537bb2e54f46ebb0690b803ceed83194386f65
}
