<?php

namespace SMS\Http\Controllers\Admin;

use Illuminate\Http\Request;
use SMS\Http\Requests\Student\StudentRequest;
use SMS\Http\Requests\Teacher\TeacherRequest;
use SMS\Http\Requests\Admin\AdminRequest;
use SMS\Http\Requests\Request\SettingsRequest;
use SMS\Http\Controllers\Controller;
use SMS\Events\PostAnnouncement;
use SMS\Services\AdminService;
use SMS\Models\Department;
use SMS\Models\YearLevel;
use SMS\Models\Student;
use SMS\Models\Section;
use SMS\Models\Teacher;
use SMS\Models\Classes;
use SMS\Models\Admin;
use SMS\Models\Subject;
use SMS\Models\Announcement;
use Auth;
use Hash;
use DB;

use Twilio\Rest\Client;

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

            return redirect()->back()->withInput()->with(['failed'=>'Error in registering the students']);
        }

        return redirect()->route('admin.studentlist')->with(['success'=>'Successfully Registered!']);

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

            return redirect()->back()->withInput()->with(['failed'=>'Error in registering the teachers']);
        }

        return redirect()->route('admin.teacher')->with(['success'=>'Successfully Registered!']);
    }

    public function class_view()
    {

        $class = Classes::leftJoin('sections','classes.id' ,'=', 'sections.class_id')
                ->selectRaw('classes.*, count(sections.class_id) as num_section')
                ->groupBy('classes.id','classes.class_name','classes.created_at','classes.updated_at','classes.deleted_at')
                ->get();

        return view('admin.class',compact('class'));
    }

    public function edit_class(Request $request)
    {
        $data = $request->all();

        \DB::beginTransaction();

        try
        {
            $save = $this->adminService->edit_class($data);
            \DB::commit(); 
        }catch(\Exception $th)
        {
            \DB::rollback();

            return redirect()->back()->withInput()->with(['failed'=>'Error in Editing the Class']);
        }

        return redirect()->back()->with(['success'=>'Successfully Edit in Class !']);

    }

    public function delete_class(Request $request)
    {
        $id = $request->id;

        \DB::beginTransaction();

        try
        {
            $class = Classes::find($id);
            $class->delete();
            \DB::commit(); 
        }catch(\Exception $th)
        {
            \DB::rollback();

            return redirect()->back()->withInput()->with(['failed'=>'Error in Deleting the Class']);
        }

        return redirect()->back()->with(['success'=>'Successfully Deleting a Class !']);
    }

    public function delete_section(Request $request)
    {
        $id = $request->id;

        \DB::beginTransaction();

        try
        {
            $section = Section::find($id);
            $section->forceDelete();

            \DB::commit(); 
        }catch(\Exception $th)
        {
            \DB::rollback();

            return redirect()->back()->withInput()->with(['failed'=>'Error in Deleting the Section']);
        }

        return redirect()->back()->with(['success'=>'Successfully Deleting a Section !']);
    }
    public function view_section(Request $request, $id)
    {

        $section = $this->adminService->get_Section($id);
        return view('admin.view_section', compact('section','id'));
    }

    public function edit_section(Request $request)
    {
        $data = $request->all();

        \DB::beginTransaction();

        try
        {
           
            $save = $this->adminService->edit_section($data);          
            \DB::commit(); 
        }catch(\Exception $th)
        {
            \DB::rollback();

            return redirect()->back()->withInput()->with(['failed'=>'Error in Editing the Section']);
        }

        return redirect()->back()->with(['success'=>'Successfully Edit in Section !']);
    }

    public function view_student($class_id,$section_id)
    {
        $conditions = ['section_id' => $section_id, 'class_id' => $class_id];

        $students = Student::where($conditions)
                ->get();
        return $students;
    }

    public function add_section(Request $request)
    {
        
        $data = $request->add_section;
        $id = $request->id;

        \DB::beginTransaction();
        try{
            
            $section = new Section();
            $section->section_name = $data;
            $section->class_id = $id;
            $section->section_id = $id;
            $section->year_level_id = 0;
            $section->save();
            \DB::commit();
        }catch(\Exception $e){
            \DB::rollback();

            return redirect()->back()->withInput()->with(['failed' => 'Error in Adding a Section']);

        }
        return redirect()->back()->withInput()->with(['success' => 'Section Successfully Created']);
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
        dd($request);
        $data = $request->all();
        $data['id'] = $id;
    
        \DB::beginTransaction();
        try{
            $this->adminService->student_update($data);
            \DB::commit();
        }catch(\Exception $e){
            \DB::rollback();

            return redirect()->back()->withInput()->with(['failed' => 'Username is taken']);
        }

        return redirect()->route('admin.studentlist')->with(['success' => 'Successfully Edited!']);
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

            return redirect()->back()->withInput()->with(['failed' => 'Please fill up the forms']);
        }

        return redirect()->route('admin.teacher')->with(['success' => 'Successfully Edited!']);
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

    public function announcement()
    {
        $announcement = Announcement::get();
        event(new \SMS\Events\PostAnnouncement('Administrator'));
        return view('admin.announcement',compact('announcement'));
    }

    public function post_announcement(Request $request)
    {
        $data = $request->all();

        \DB::beginTransaction();
        try{
            $rtn = $this->adminService->store_announcement($data);
            \DB::commit();
        }catch(\Exception $e){
            \DB::rollback();

            return redirect()->back()->withInput()->with(['failed' => 'Error in posting announcement']);
        }

        return redirect()->back()->withInput()->with('success','Successfully Posted Announcement');
    }

    public function send_message(Request $request)
    {
        $id = $request->LRN;
        $message = $request->content;

        $number = Student::where('LRN',$id)->firstorFail();
        $account_sid = "AC454e23beced5b3cdbabc6e9611bbf3e1";
        $auth_token = "e150e3d8b1616efa4041960680efb574";
        $twilio_number = +19204822645;
        $client = new Client($account_sid,$auth_token);
        $client->messages->create($number->cell_1,[
            'from'=> $twilio_number, 'body' => $message
        ]);

        return redirect()->back()->withInput()->with('success','Successfully Send Message');
    }

    public function settings()
    {
        return view('admin.settings');
    }

    public function change_settings(SettingsRequest $request,$id)
    {
        $admin = Admin::findorFail($id);
        $action = $request->action;
        switch ($action) {
            case 'username':
                \DB::beginTransaction();
                try{
                    $rtn = $this->adminService->change_username($request->user_name,$id);
                    \DB::commit();
                }catch(\Exception $e){
                    \DB::rollback();
        
                    return redirect()->back()->withInput()->with(['failed' => 'Error in Changing Username']);
                }

                return redirect()->back()->withInput()->with(['success' => 'Successfully Change Username']);
                break;
            
            case 'password':
                if (Hash::check($request->old_pass,$admin->password)) {

                    \DB::beginTransaction();
                    try{
                        $rtn = $this->adminService->change_password($request->new_pass,$id);
                        \DB::commit();
                    }catch(\Exception $e){
                        \DB::rollback();
            
                        return redirect()->back()->withInput()->with(['failed' => 'Error in Changing Password']);
                    }
    
                    return redirect()->back()->withInput()->with(['success' => 'Password Change Successfully']);
                }else{
                    return redirect()->back()->withInput()->with(['failed' => 'Wrong Password']);
                }
                break;
            
            case 'contact':
                \DB::beginTransaction();
                try{
                    $rtn = $this->adminService->change_contact($request->contact_number,$id);
                    \DB::commit();
                }catch(\Exception $e){
                    \DB::rollback();
        
                    return redirect()->back()->withInput()->with(['failed' => 'Error in Changing Contact Number']);
                }

                return redirect()->back()->withInput()->with(['success' => 'Contact Change Successfully']);

                break;
            
            case 'addressbtn':
                \DB::beginTransaction();
                try{
                    $rtn = $this->adminService->change_address($request->address,$id);
                    \DB::commit();
                }catch(\Exception $e){
                    \DB::rollback();
        
                    return redirect()->back()->withInput()->with(['failed' => 'Error in Changing the Address']);
                }

                return redirect()->back()->withInput()->with(['success' => 'Address Change Successfully']);
                break;

            default:
                # code...
                break;
        }
    }

    public function add_class(Request $request)
    {
        $data = $request->add_class;

        \DB::beginTransaction();
        try{
            
            $class = new Classes();
            $class->class_name = $data;
            $class->save();
            \DB::commit();
        }catch(\Exception $e){
            \DB::rollback();

            return redirect()->back()->withInput()->with(['failed' => 'Error in Adding a Batch']);

        }
        return redirect()->back()->withInput()->with(['success' => 'Class Successfully Created']);


    }
}
