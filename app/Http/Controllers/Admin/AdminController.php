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
use SMS\Models\Grades;
use SMS\Models\Admin;
use SMS\Models\Subject;
use SMS\Models\DiagnosticExam;
use Config;
use SMS\Models\Announcement;
use SMS\Models\GradeSevenSubject;
use SMS\Models\GradeEightSubject;
use SMS\Models\GradeNineSubject;
use SMS\Models\GradeTenSubject;
use SMS\Models\GradeElevenSubject;
use SMS\Models\GradeTwelveSubject;
use SMS\Notifications\NewMessageNotifications;
use JavaScript;
use Session;
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

    public function landing()
    {
        return view('landing.front_page');
    }
    
    public function dashboard()
    {
        $g7 = Student::where('year_level_id','=','1')->count();
        $g8 = Student::where('year_level_id','=','2')->count();
        $g9 = Student::where('year_level_id','=','3')->count();
        $g10 = Student::where('year_level_id','=','4')->count();
        $g11 = Student::where('year_level_id','=','5')->count();
        $g12 = Student::where('year_level_id','=','6')->count();

        // Grade 7 
        $g7first = Grades::select(DB::raw("SUM(first_grading) as count"))
                        ->where('year_level_id','=',1)
                        ->groupBy(DB::raw("year_level_id"))
                        ->get();
        $g7_count = Grades::where('year_level_id','=',1)->count();

        $g7rank = Grades::select('students.firstname','students.lastname', DB::raw("ROUND(((grades.first_grading + grades.second_grading + grades.third_grading + grades.fourth_grading)/4),2) as total"))
                    ->join('students','students.id','=','grades.user_id')
                    ->where('grades.year_level_id','=',1)
                    ->orderBy('total','DESC')
                    ->take(10)
                    ->get();


        // $total_g7_first = round($g7first[0]['count'] / $g7_count,2);

        $g7second = Grades::select(DB::raw("SUM(second_grading) as count"))
                        ->where('year_level_id','=',1)
                        ->groupBy(DB::raw("year_level_id"))
                        ->get();
        
        // $total_g7_second = round($g7second[0]['count'] / $g7_count,2);

        $g7third = Grades::select(DB::raw("SUM(third_grading) as count"))
                        ->where('year_level_id','=',1)
                        ->groupBy(DB::raw("year_level_id"))
                        ->get();
       
        // $total_g7_third = round($g7third[0]['count'] / $g7_count,2);

        $g7fourth = Grades::select(DB::raw("SUM(fourth_grading) as count"))
                        ->where('year_level_id','=',1)
                        ->groupBy(DB::raw("year_level_id"))
                        ->get();
       
        // $total_g7_fourth = round($g7fourth[0]['count'] / $g7_count,2);

        // Grade 8
        $g8first = Grades::select(DB::raw("SUM(first_grading) as count"))
                        ->where('year_level_id','=',2)
                        ->groupBy(DB::raw("year_level_id"))
                        ->get();
        $g8_count = Grades::where('year_level_id','=',2)->count();
        // $total_g8_first = round($g8first[0]['count'] / $g8_count,2);

        $g8rank = Grades::select('students.firstname','students.lastname', DB::raw("ROUND(((grades.first_grading + grades.second_grading + grades.third_grading + grades.fourth_grading)/4),2) as total"))
                    ->join('students','students.id','=','grades.user_id')
                    ->where('grades.year_level_id','=',2)
                    ->orderBy('total','DESC')
                    ->take(10)
                    ->get();

        $g8second = Grades::select(DB::raw("SUM(second_grading) as count"))
                        ->where('year_level_id','=',2)
                        ->groupBy(DB::raw("year_level_id"))
                        ->get();
        
        // $total_g8_second = round($g8second[0]['count'] / $g8_count,2);

        $g8third = Grades::select(DB::raw("SUM(third_grading) as count"))
                        ->where('year_level_id','=',2)
                        ->groupBy(DB::raw("year_level_id"))
                        ->get();
       
        // $total_g8_third = round($g8third[0]['count'] / $g8_count,2);

        $g8fourth = Grades::select(DB::raw("SUM(fourth_grading) as count"))
                        ->where('year_level_id','=',2)
                        ->groupBy(DB::raw("year_level_id"))
                        ->get();
       
        // $total_g8_fourth = round($g8fourth[0]['count'] / $g8_count,2);

        // Grade 9

        $g9rank = Grades::select('students.firstname','students.lastname', DB::raw("ROUND(((grades.first_grading + grades.second_grading + grades.third_grading + grades.fourth_grading)/4),2) as total"))
                    ->join('students','students.id','=','grades.user_id')
                    ->where('grades.year_level_id','=',3)
                    ->orderBy('total','DESC')
                    ->take(10)
                    ->get();

        $g9first = Grades::select(DB::raw("SUM(first_grading) as count"))
                        ->where('year_level_id','=',3)
                        ->groupBy(DB::raw("year_level_id"))
                        ->get();
        $g9_count = Grades::where('year_level_id','=',3)->count();
        // $total_g9_first = round($g9first[0]['count'] / $g9_count,2);

        $g9second = Grades::select(DB::raw("SUM(second_grading) as count"))
                        ->where('year_level_id','=',3)
                        ->groupBy(DB::raw("year_level_id"))
                        ->get();
        
        // $total_g9_second = round($g9second[0]['count'] / $g9_count,2);

        $g9third = Grades::select(DB::raw("SUM(third_grading) as count"))
                        ->where('year_level_id','=',3)
                        ->groupBy(DB::raw("year_level_id"))
                        ->get();
       
        // $total_g9_third = round($g9third[0]['count'] / $g9_count,2);

        $g9fourth = Grades::select(DB::raw("SUM(fourth_grading) as count"))
                        ->where('year_level_id','=',3)
                        ->groupBy(DB::raw("year_level_id"))
                        ->get();
       
        // $total_g9_fourth = round($g9fourth[0]['count'] / $g9_count,2);
        
        // Grade 10
        $g10rank = Grades::select('students.firstname','students.lastname', DB::raw("ROUND(((grades.first_grading + grades.second_grading + grades.third_grading + grades.fourth_grading)/4),2) as total"))
                    ->join('students','students.id','=','grades.user_id')
                    ->where('grades.year_level_id','=',4)
                    ->orderBy('total','DESC')
                    ->take(10)
                    ->get();


         $g10first = Grades::select(DB::raw("SUM(first_grading) as count"))
                        ->where('year_level_id','=',4)
                        ->groupBy(DB::raw("year_level_id"))
                        ->get();
        $g10_count = Grades::where('year_level_id','=',4)->count();
        // $total_g10_first = round($g10first[0]['count'] / $g10_count,2);

        $g10second = Grades::select(DB::raw("SUM(second_grading) as count"))
                        ->where('year_level_id','=',4)
                        ->groupBy(DB::raw("year_level_id"))
                        ->get();
        
        // $total_g10_second = round($g10second[0]['count'] / $g10_count,2);

        $g10third = Grades::select(DB::raw("SUM(third_grading) as count"))
                        ->where('year_level_id','=',4)
                        ->groupBy(DB::raw("year_level_id"))
                        ->get();
       
        // $total_g10_third = round($g10third[0]['count'] / $g10_count,2);

        $g10fourth = Grades::select(DB::raw("SUM(fourth_grading) as count"))
                        ->where('year_level_id','=',4)
                        ->groupBy(DB::raw("year_level_id"))
                        ->get();
       
        // $total_g10_fourth = round($g10fourth[0]['count'] / $g10_count,2);

        // Grade 11
        $g11rank = Grades::select('students.firstname','students.lastname', DB::raw("ROUND(((grades.first_grading + grades.second_grading + grades.third_grading + grades.fourth_grading)/4),2) as total"))
                    ->join('students','students.id','=','grades.user_id')
                    ->where('grades.year_level_id','=',5)
                    ->orderBy('total','DESC')
                    ->take(10)
                    ->get();

        $g11first = Grades::select(DB::raw("SUM(first_grading) as count"))
                        ->where('year_level_id','=',5)
                        ->groupBy(DB::raw("year_level_id"))
                        ->get();
        $g11_count = Grades::where('year_level_id','=',5)->count();
        // $total_g11_first = round($g11first[0]['count'] / $g11_count,2);

        $g11second = Grades::select(DB::raw("SUM(second_grading) as count"))
                        ->where('year_level_id','=',5)
                        ->groupBy(DB::raw("year_level_id"))
                        ->get();
        
        // $total_g11_second = round($g11second[0]['count'] / $g11_count,2);

        $g11third = Grades::select(DB::raw("SUM(third_grading) as count"))
                        ->where('year_level_id','=',5)
                        ->groupBy(DB::raw("year_level_id"))
                        ->get();
       
        // $total_g11_third = round($g11third[0]['count'] / $g11_count,2);

        $g11fourth = Grades::select(DB::raw("SUM(fourth_grading) as count"))
                        ->where('year_level_id','=',5)
                        ->groupBy(DB::raw("year_level_id"))
                        ->get();
       
        // $total_g11_fourth = round($g11fourth[0]['count'] / $g11_count,2);

        // Grade 12

        $g12rank = Grades::select('students.firstname','students.lastname', DB::raw("ROUND(((grades.first_grading + grades.second_grading + grades.third_grading + grades.fourth_grading)/4),2) as total"))
                    ->join('students','students.id','=','grades.user_id')
                    ->where('grades.year_level_id','=',6)
                    ->orderBy('total','DESC')
                    ->take(10)
                    ->get();

        $g12first = Grades::select(DB::raw("SUM(first_grading) as count"))
                        ->where('year_level_id','=',6)
                        ->groupBy(DB::raw("year_level_id"))
                        ->get();
        $g12_count = Grades::where('year_level_id','=',6)->count();
        // $total_g12_first = round($g12first[0]['count'] / $g12_count,2);

        $g12second = Grades::select(DB::raw("SUM(second_grading) as count"))
                        ->where('year_level_id','=',6)
                        ->groupBy(DB::raw("year_level_id"))
                        ->get();
        
        // $total_g12_second = round($g12second[0]['count'] / $g12_count,2);

        $g12third = Grades::select(DB::raw("SUM(third_grading) as count"))
                        ->where('year_level_id','=',6)
                        ->groupBy(DB::raw("year_level_id"))
                        ->get();
       
        // $total_g12_third = round($g12third[0]['count'] / $g12_count,2);

        $g12fourth = Grades::select(DB::raw("SUM(fourth_grading) as count"))
                        ->where('year_level_id','=',6)
                        ->groupBy(DB::raw("year_level_id"))
                        ->get();
       
        // $total_g12_fourth = round($g12fourth[0]['count'] / $g12_count,2);
        // JavaScript::put([
        //     'g7_first'=> $total_g7_first,
        //     'g7_second'=> $total_g7_second,
        //     'g7_third'=> $total_g7_third,
        //     'g7_fourth' => $total_g7_fourth,
        //     'g8_first'=> $total_g8_first,
        //     'g8_second'=> $total_g8_second,
        //     'g8_third'=> $total_g8_third,
        //     'g8_fourth' => $total_g8_fourth,
        //     'g9_first'=> $total_g9_first,
        //     'g9_second'=> $total_g9_second,
        //     'g9_third'=> $total_g9_third,
        //     'g9_fourth' => $total_g9_fourth,
        //     'g10_first'=> $total_g10_first,
        //     'g10_second'=> $total_g10_second,
        //     'g10_third'=> $total_g10_third,
        //     'g10_fourth' => $total_g10_fourth,
        //     'g11_first'=> $total_g11_first,
        //     'g11_second'=> $total_g11_second,
        //     'g11_third'=> $total_g11_third,
        //     'g11_fourth' => $total_g11_fourth,
        //     'g12_first'=> $total_g12_first,
        //     'g12_second'=> $total_g12_second,
        //     'g12_third'=> $total_g12_third,
        //     'g12_fourth' => $total_g12_fourth,
        //     'g7rank' => $g7rank,
        //     'g8rank' => $g8rank,
        //     'g9rank' => $g9rank,
        //     'g10rank' => $g10rank,
        //     'g11rank' => $g11rank,
        //     'g12rank' => $g12rank
        // ]);
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

        return redirect()->route('admin.studentlist')->with(['success'=>'Successfully Registered.']);

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

        return redirect()->route('admin.teacher')->with(['success'=>'Successfully Registered.']);
    }

    public function class_view()
    {

        $class = Classes::leftJoin('sections','classes.id' ,'=', 'sections.class_id')
                ->selectRaw('classes.*, count(sections.class_id) as num_section')
                ->groupBy('classes.id','classes.class_name','classes.description','classes.from','classes.to','classes.created_at','classes.updated_at','classes.deleted_at')
                ->orderBy('classes.created_at','desc')
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

        return redirect()->back()->with(['success'=>'Successfully Edited.']);

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

        return redirect()->back()->with(['success'=>'Successfully Deleted.']);
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

        return redirect()->back()->with(['success'=>'Successfully Deleted']);
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

        return redirect()->back()->with(['success'=>'Successfully Edited']);
    }

    public function view_student($class_id,$section_id,$year_level_id)
    {
        $conditions = ['section_id' => $section_id, 'class_id' => $class_id,'year_level_id' => $year_level_id];

        $students = Student::where($conditions)
                ->orderBy('lastname','asc')
                ->get();
        return $students;
    }

    public function add_section(Request $request)
    {
        
        $data = $request->add_section;
        $description = $request->description;
        $from = $request->from;
        $to = $request->to;
        $id = $request->id;

        \DB::beginTransaction();
        try{
            
            $section = new Section();
            $section->section_name = $data;
            $section->class_id = $id;
            $section->description = $description;
            $section->section_id = $id;
            $section->from = $from;
            $section->to = $to;
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
        $student_arr = array();
        $student = Student::select('students.*','year_levels.yearlevel')
                    ->join('year_levels','students.year_level_id', '=', 'year_levels.id')
                    ->distinct()
                    ->get();
        $stud = Student::where('section_id' ,'=', 0)->get();
        if ($stud != null) {
            foreach($stud as $i => $students){
                $student_arr[$i] = new DiagnosticExam; 
                $student_arr[$i]->LRN = $students->LRN;
                $student_arr[$i]->save();       
            }
        }
        return view('admin.studentlist', compact('student'));
    }

    public function student_edit($id)
    {
        $student = Student::findOrFail($id);
        
        return view('admin.edit', compact('student'));
    }

    public function student_update(Request $request,$id)
    {
        
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
    
    public function getMunicipality($province)
    {
        $municipality = Config::get('const.municipality');
        foreach ($municipality as $key => $val) {
            if ($key == $province) {
                return json_encode($val);
            }
        }
        return null;
        
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
        $announcement = Announcement::where('posted',0)->get();
        $post_announcement = Announcement::where('posted',1)->get();
        event(new \SMS\Events\PostAnnouncement('Administrator'));
        return view('admin.announcement',compact('announcement','post_announcement'));
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

    public function change_settings(Request $request,$id)
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
            default:
                # code...
                break;
        }
    }

    public function add_class(Request $request)
    {
        $class_name = $request->add_class;
        $description = $request->description;
        $from = $request->from;
        $to = $request->to;

        \DB::beginTransaction();
        try{
            
            $class = new Classes();
            $class->class_name = $class_name;
            $class->description = $description;
            $class->from = $from;
            $class->to = $to;
            $class->save();
            \DB::commit();
        }catch(\Exception $e){
            \DB::rollback();

            return redirect()->back()->withInput()->with(['failed' => 'Error in Adding a Batch']);

        }
        return redirect()->back()->withInput()->with(['success' => 'Class Successfully Created']);


    }

    public function view_grade($id,$class_id)
    {
        $grades = Grades::select('grades.first_grading','grades.second_grading','grades.third_grading','grades.fourth_grading','subjects.subject_name','grades.subject_id','grades.user_id','grades.class_id')
                ->join('subjects','subjects.department_id','=','grades.subject_id')
                ->where('grades.user_id',$id)
                ->where('grades.class_id',$class_id)
                ->groupBy('subjects.subject_name','grades.first_grading','grades.second_grading','grades.third_grading','grades.fourth_grading','grades.subject_id','grades.user_id','grades.class_id')
                ->get();
        return $grades;
    }

    public function edit_grade(Request $request)
    {
        $data = $request->all();

        \DB::beginTransaction();

        try
        {
            $save = $this->adminService->edit_grade($data);
            \DB::commit(); 
        }catch(\Exception $th)
        {
            \DB::rollback();
        }

        return $save;
    }


    public function delete_student(Request $request)
    {
        $id = $request->id;

        \DB::beginTransaction();

        try
        {
            $student= Student::find($id);
            $student->delete();
            \DB::commit(); 
        }catch(\Exception $th)
        {
            \DB::rollback();

            return redirect()->back()->withInput()->with(['failed'=>'Error in Deleting a Student']);
        }

        return redirect()->back()->with(['success'=>'Successfully Deleting a Student !']);
    }

    public static function post_notify(Request $request)
    {
        $id = $request->LRN;
        $type_id = $request->type_id;

        if ($type_id == 2) {
            $announcement = Announcement::find($id);
            $announcement->posted = true;
            $announcement->save();

            $announce = Announcement::where('id',$id)->get();
            foreach ($announce as $value) {
                $account_sid = "ACdde64cdd349ae0f29e63abbb88897785";
                $auth_token = "a48145583530ce0b9347df6ed9e10132";
                $twilio_number = +12053465684;
                $client = new Client($account_sid,$auth_token);
                $client->messages->create('+639302664420',[
                    'from'=> $twilio_number, 'body' => $value->title . $value->body
                ]);
            }

            return redirect()->back()->withInput()->with('success','Successfully Send Message');
            
        }       
    }
    public function view_diagnostic()
    {
        $diagnostic = DiagnosticExam::join('students','students.LRN','=','diagnostic_exams.LRN')
                                    ->orderBy('students.lastname','asc')
                                    ->get();
        
        $section = Section::where('year_level_id','=',1)
                    ->get();        
        
        $exam = $diagnostic->where('section_id',0)->count();

        return view('admin.diagnostic_exam',compact('diagnostic','section','exam'));
    }
    public function editDiagnostic(Request $request)
    {
        $data = $request->all();

        \DB::beginTransaction();

        try
        {
            $save = $this->adminService->editDiagnostic($data);
            \DB::commit(); 
        }catch(\Exception $th)
        {
            \DB::rollback();
        }

        return $save;
    }
    public function getAverage(Request $request)
    {
        $data = $request->all();
        
        \DB::beginTransaction();

        try
        {
            $save = $this->adminService->getAverage($data);
            \DB::commit(); 
        }catch(\Exception $th)
        {
            \DB::rollback();
        }

        return $save;        
    }

    public function assignSection(Request $request)
    {
        $data = $request->all();
        
        \DB::beginTransaction();

        try
        {
            $save = $this->adminService->assignSection($data);
            \DB::commit(); 
        }catch(\Exception $th)
        {
            \DB::rollback();
        }

        return $save;       
    }

    public function examDelete()
    {
        DiagnosticExam::truncate();

        return response()->json(['success','Successfull Deleted']);
    }

    public function departmentView()
    {
        $department = Department::select('departments.*', DB::raw('COUNT(teachers.id) as total'))
                                ->join('teachers','teachers.departments_id','=','departments.id')
                                ->groupBy('departments.id','departments.department_name','departments.description','departments.created_at','departments.updated_at')
                                ->get();
        return view('admin.department',compact('department'));
    }

    public function addDepartment(Request $request)
    {
        $data = $request->all();

        \DB::beginTransaction();
        try
        {
            $department = new Department();
            $department->department_name = $data['add_department'];
            $department->description = $data['description'];
            $department->save();
            
            \DB::commit(); 
        }catch(\Exception $th)
        {
            \DB::rollback();
        }
        return $department;

    }

    public function editDepartment(Request $request)
    {
        $data = $request->all();

        \DB::beginTransaction();

        try
        {
            $save = $this->adminService->editDepartment($data);
            \DB::commit(); 
        }catch(\Exception $th)
        {
            \DB::rollback();

        }

        return $save;   
    }

    public function deleteDepartment(Request $request)
    {
        $id = $request->id;
        $depart = Department::find($id);
        $depart->delete();
        return $depart;
    }

    public function subjectView()
    {
        $seven = GradeSevenSubject::where('year_level_id',1)
                ->paginate(10);

        $eight = GradeEightSubject::where('year_level_id',2)
                ->paginate(10);

        $nine = GradeNineSubject::where('year_level_id',3)
                ->paginate(10);

        $ten = GradeTenSubject::where('year_level_id',4)
                ->paginate(10);

        $elevenfirst = GradeElevenSubject::where('year_level_id',5)
                ->where('semester',1)
                ->paginate(10);
        
        $elevensecond = GradeElevenSubject::where('year_level_id',5)
                ->where('semester',2)
                ->paginate(10);

        $year = YearLevel::all()->take(4);
        $yearset = YearLevel::orderBy('id','desc')->take(2)->get();
    
        $department = Department::all();
       
        
        return view('admin.view_subjects',compact('seven','eight','nine','ten','elevenfirst','elevensecond','year','department','yearset'));
    }

    public function addSubject(Request $request)
    {
        $data = $request->all();
        \DB::beginTransaction();
        try
        {
            $save = $this->adminService->addSubject($data);
            \DB::commit(); 
        }catch(\Exception $th)
        {
            \DB::rollback();
        }
        return $save;
    }

    public function addSubjectset(Request $request)
    {
        $data = $request->all();

        \DB::beginTransaction();
        try
        {
            $save = $this->adminService->addSubjectset($data);
            \DB::commit(); 
        }catch(\Exception $th)
        {
            \DB::rollback();
        }
        return $save;
    }

    public function editSubject(Request $request)
    {
        $data = $request->all();

        \DB::beginTransaction();
        try
        {
            $save = $this->adminService->editSubject($data);
            \DB::commit(); 
        }catch(\Exception $th)
        {
            \DB::rollback();
        }
        return $save;
    }

    public function editSubjectset(Request $request)
    {
        $data = $request->all();

        \DB::beginTransaction();
        try
        {
            $save = $this->adminService->editSubjectset($data);
            \DB::commit(); 
        }catch(\Exception $th)
        {
            \DB::rollback();
        }
        return $save;
    }
}
