<?php

namespace SMS\Services;

use SMS\Models\Student;
use SMS\Models\Teacher;
use SMS\Models\Section;
use SMS\Models\YearLevel;
use SMS\Models\Classes;
use SMS\Models\Subject;
use SMS\Models\Assign;
use SMS\Models\Admin;
use SMS\Models\Grades;
use SMS\Models\Department;
use SMS\Models\DiagnosticExam;
use SMS\Helper\FileHelper;
use SMS\Models\Announcement;
use SMS\Models\GradeSevenSubject;
use SMS\Models\GradeEightSubject;
use SMS\Models\GradeNineSubject;
use SMS\Models\GradeTenSubject;
use SMS\Models\GradeElevenSubject;
use SMS\Models\GradeTwelveSubject;
use SMS\Notifications\NewAnnouncementNotification;
use Hash;
use Carbon\Carbon;


class AdminService
{
    /** @var \SMS\Models\Student **/
    private $studentList;

    /** @var \SMS\Models\Teacher **/
    private $teacherList;

    /** @var \SMS\Models\section **/
    private $sectionList;

    /** @var \SMS\Models\YearLevel **/
    private $yearlevelList;

    /** @var \SMS\Models\Announcement **/
    private $announcementList;

    /** @var \SMS\Models\Admin **/
    private $adminList;

     /** @var \SMS\Models\Classes **/
     private $classesList;

    /**
     * AdminService constructor.
     *
     * @param Student $studentList
     * @param Teacher $teacherList
     * @param Section $sectionList
     * @param Teacher $yearlevelList
     * @param Classes $classesList
     * @param Announcement $announcementList
     *
     *
     */
    function __construct(Student $studentList,Teacher $teacherList,Section $sectionList,YearLevel $yearlevelList,Announcement $announcementList,
                        Admin $adminList,Classes $classesList)
    {
        $this->studentList = $studentList;
        $this->teacherList = $teacherList;
        $this->sectionList = $sectionList;
        $this->yearlevelList = $yearlevelList;
        $this->announcementList = $announcementList;
        $this->adminList = $adminList;
        $this->classesList = $classesList;
  
    }


    public function store($data)
    {
        $file = $data['photo_img'];
        $filename = $file->getClientOriginalName();
        
       if (substr($data['cell_1'], 0,1) === '0') {
           $sample = substr_replace('0','+63',0);
           $newcell = $sample . substr($data['cell_1'], 1);
      }

        $student = [];
        $student['LRN'] = $data['LRN'];
        $student['lastname'] = $data['lastname'];
        $student['firstname'] = $data['firstname'];
        $student['middlename'] = $data['middlename'];
        $student['age'] = $data['age'];
        $student['register_date'] = Carbon::parse($data['register_date']);
        $student['username'] = $data['username'];
        $student['password'] = Hash::make($data['password']);
        $student['gender'] = $data['gender'];
        $student['birthday'] = Carbon::parse($data['birthday']);
        $student['religion'] = $data['religion'];
        $student['city'] = $data['city'];
        $student['street_address'] = $data['street_address'];
        $student['province'] = $data['province'];
        $student['mother_name'] = $data['mother_name'];
        $student['mother_occupation'] = $data['mother_occupation'];
        $student['father_name'] = $data['father_name'];
        $student['father_occupation'] = $data['father_occupation'];
        $student['guardian_lastname'] = $data['guardian_lastname'];
        $student['guardian_firstname'] = $data['guardian_firstname'];
        $student['guardian_middlename'] = $data['guardian_middlename'];
        $student['rel_student'] = $data['rel_student'];
        $student['current_res'] = $data['current_res'];
        $student['mother_tounge'] = $data['mother_tounge'];
        $student['guardian_rel'] = $data['guardian_rel'];
        $student['dialects'] = $data['dialects'];
        $student['year_level_id'] = $data['year_level_id'];
        $student['ethnicities'] = $data['ethnicities'];
        $student['cell_1'] = $newcell;
        $student['photo_img'] = $filename;
        $file->storeAs('public/student',$filename);
        $rtn = $this->studentList->create($student);
        $rtn->save();
        return $rtn;    
       
    }


    public function store_teacher($data)
    {
        $teacher = [];
        $teacher['lastname'] = $data['lastname'];
        $teacher['departments_id'] = $data['department'];
        $teacher['firstname'] = $data['firstname'];
        $teacher['middlename'] = $data['middlename'];
        $teacher['register_date'] = $data['register_date'];
        $teacher['username'] = $data['username'];
        $teacher['password'] = Hash::make($data['password']);
        $teacher['gender'] = $data['gender'];
        $teacher['age'] = $data['age'];
        $teacher['birthdate'] = $data['birthdate'];
        $teacher['religion'] = $data['religion'];
        $teacher['city'] = $data['city'];
        $teacher['street_address'] = $data['street_address'];
        $teacher['province'] = $data['province'];
        $teacher['cell_no'] = $data['cell_no'];
        $teacher['school_graduated'] = $data['school_graduated'];
        $teacher['date_graduated'] = $data['date_graduated'];

    
        $rtn = $this->teacherList->create($teacher);
        $rtn->save();
        
        return $rtn;   
        
    }

    public function get_Subject($id)
    {
        switch ($id) {
            case 1:
                $subject = GradeSevenSubject::where('year_level_id','=',$id)
                        ->get();
                return $subject;
                break;
            case 2:
                $subject = GradeEightSubject::where('year_level_id','=',$id)
                        ->get();
                return $subject;
                break;
            case 3:
                $subject = GradeNineSubject::where('year_level_id','=',$id)
                        ->get();
                return $subject;
                break;
            case 4:
                $subject = GradeTenSubject::where('year_level_id','=',$id)
                        ->get();
                return $subject;
                break;
            case 5:
                $subject = GradeElevenSubject::where('year_level_id','=',$id)
                        ->get();
                return $subject;
                break;
            default:
                $subject = GradeTwelveSubject::where('year_level_id','=',$id)
                        ->get();
                return $subject;
                break;
        }
        
    }
    public function get_Section($id)
    {
        $section = Classes::join('sections', 'sections.class_id', '=', 'classes.id')
                    ->select('sections.*')
                    ->where('sections.class_id','=',$id)
                    ->orderBy('sections.created_at','desc')
                    ->get();

        return $section;
    }

    public function student_update($data)
    {
        $student = $this->studentList->find($data['id']);
        $student->LRN = $data['LRN'];
        $student->lastname = $data['lastname'];
        $student->firstname = $data['firstname'];
        $student->middlename = $data['middlename'];
        $student->register_date = $data['register_date'];
        $student->age = $data['age'];
        $student->username = $data['username'];
        $student->password = Hash::make($data['password']);
        $student->gender = $data['gender'];
        $student->birthday = $data['birthday'];
        $student->religion = $data['religion'];
        $student->city = $data['city'];
        $student->street_address = $data['street_address'];
        $student->province = $data['province'];
        $student->mother_name = $data['mother_name'];
        $student->mother_occupation = $data['mother_occupation'];
        $student->father_name = $data['father_name'];
        $student->father_occupation = $data['father_occupation'];
        $student->guardian_lastname = $data['guardian_lastname'];
        $student->guardian_firstname = $data['guardian_firstname'];
        $student->guardian_middlename = $data['guardian_middlename'];
        $student->rel_student = $data['rel_student'];
        $student->current_res = $data['current_res'];
        $student->mother_tounge = $data['mother_tounge'];
        $student->guardian_rel = $data['guardian_rel'];
        $student->dialects = $data['dialects'];
        $student->ethnicities = $data['ethnicities'];
        $student->cell_1 = $data['cell_1'];
        $student->type_id = 1;
        $student->section_id = 1;
        $student->photo_img = $data['photo_img'];
        if ($student) {
            if (!empty($student->photo_img)) {
                $sourcepath = FileHelper::getServerPath($student->photo_img);
                if (file_exists($sourcepath)) {
                    dd($sourcepath);
                    $fileinfo = pathinfo($sourcepath);
                    $target_path = 'storage/app/public' . config('const.upload_path_img_student') .'lrn/';
                    dd($target_path);
                    FileHelper::addDirectory($target_path, 777);
                    $target_path = $target_path . $fileinfo['basename'];
                    if (!\File::move($sourcepath, $target_path)) {
                        throw new \Exception('The file could not be moved.');
                    } else {
                        $student->photo_img = FileHelper::getServerPath($target_path);
                        $student->save();
                    }
                }
            }
        }

        return $student;
    }

    public function teacher_update($data)
    {
        $teacher = $this->teacherList->find($data['id']);
        $teacher->lastname = $data['lastname'];
        $teacher->departments_id = $data['department'];
        $teacher->firstname = $data['firstname'];
        $teacher->middlename = $data['middlename'];
        $teacher->register_date = $data['register_date'];
        $teacher->username = $data['username'];
        $teacher->password = Hash::make($data['password']);
        $teacher->gender = $data['gender'];
        $teacher->age = $data['age'];
        $teacher->birthdate = $data['birthdate'];
        $teacher->religion = $data['religion'];
        $teacher->city = $data['city'];
        $teacher->street_address = $data['street_address'];
        $teacher->province = $data['province'];
        $teacher->cell_no = $data['cell_no'];
        $teacher->school_graduated = $data['school_graduated'];
        $teacher->date_graduated = $data['date_graduated'];

        $teacher->save();

        return $teacher;
    }

    public function store_assign($data,$id)
    {
        $assign = [
            ['subject_id' => $data['subject1'] , 'teacher_id' => $data['teacher1'], 'schedule_time' => $data['schedule1'],'section_id' =>$id ],
            ['subject_id' => $data['subject2'] , 'teacher_id' => $data['teacher2'], 'schedule_time' => $data['schedule2'],'section_id' =>$id ],
            ['subject_id' => $data['subject3'] , 'teacher_id' => $data['teacher3'], 'schedule_time' => $data['schedule3'],'section_id' =>$id ],
            ['subject_id' => $data['subject4'] , 'teacher_id' => $data['teacher4'], 'schedule_time' => $data['schedule4'],'section_id' =>$id ],
            ['subject_id' => $data['subject5'] , 'teacher_id' => $data['teacher5'], 'schedule_time' => $data['schedule5'],'section_id' =>$id ],
            ['subject_id' => $data['subject6'] , 'teacher_id' => $data['teacher6'], 'schedule_time' => $data['schedule6'],'section_id' =>$id ],
            ['subject_id' => $data['subject7'] , 'teacher_id' => $data['teacher7'], 'schedule_time' => $data['schedule7'],'section_id' =>$id ],
            ['subject_id' => $data['subject8'] , 'teacher_id' => $data['teacher8'], 'schedule_time' => $data['schedule8'],'section_id' =>$id ],
        ];

        $result = Assign::insert($assign);

        return $result;
        
    }

    public function update_teacher_handle($data)
    {
        $teacher1 = $this->teacherList->find($data['teacher1']);
        $teacher1->handle_classes = $teacher1->handle_classes + 1;
        $teacher1->save();
        
        $teacher2 = $this->teacherList->find($data['teacher2']);
        $teacher2->handle_classes = $teacher2->handle_classes + 1;
        $teacher2->save();

        $teacher3 = $this->teacherList->find($data['teacher3']);
        $teacher3->handle_classes = $teacher3->handle_classes + 1;
        $teacher3->save();

        $teacher4 = $this->teacherList->find($data['teacher4']);
        $teacher4->handle_classes = $teacher4->handle_classes + 1;
        $teacher4->save();

        $teacher5 = $this->teacherList->find($data['teacher5']);
        $teacher5->handle_classes = $teacher5->handle_classes + 1;
        $teacher5->save();

        $teacher6 = $this->teacherList->find($data['teacher6']);
        $teacher6->handle_classes = $teacher6->handle_classes + 1;
        $teacher6->save();

        $teacher7 = $this->teacherList->find($data['teacher7']);
        $teacher7->handle_classes = $teacher7->handle_classes + 1;
        $teacher7->save();

        $teacher8 = $this->teacherList->find($data['teacher8']);
        $teacher8->handle_classes = $teacher8->handle_classes + 1;
        $teacher8->save();
        
    }

    public function store_announcement($data)
    {
        $announcement = [];
        $announcement['title'] = $data['topic'];
        $announcement['body'] = $data['content'];
        $announcement['type_id'] = $data['type'];
        $announcement['post_time'] = Carbon::now();
        $announcement['user_id'] = 1;

        $rtn = $this->announcementList->create($announcement);
        
        $rtn->save();
        if($rtn){
            $id = $rtn->type_id;
            if ($id == 2) {
                $user = Teacher::where('type_id',$id)->get();
                if (\Notification::send($user, new NewAnnouncementNotification(Announcement::latest('id')->first()))) {
                    return $rtn;
                }
            }

        };
    }

    public function change_username($username,$id)
    {
        $admin = $this->adminList->find($id);
        $admin->username = $username;
        $admin->save();
        return $admin;
    }

    public function change_password($new,$id)
    {
        $admin = $this->adminList->find($id);
        $admin->password = Hash::make($new);
        $admin->save();
        return $admin;
    }


    public function edit_class($data)
    {
        $class = $this->classesList->find($data['id']);
        $class->class_name = $data['class_name'];
        $class->description = $data['description'];
        $class->from = $data['from'];
        $class->to = $data['to'];
        $class->save();
        return $class;
    }

    public function edit_section($data)
    {
        $section = $this->sectionList->find($data['id']);
        $section->section_name = $data['section_name'];
        $section->description = $data['description'];
        $section->from = $data['from'];
        $section->to = $data['to'];
        $section->save();
        return $section;
    }

    public function edit_grade($data)
    {   
        switch ($data['id']) {
            case 1:
                $grade = Grades::where('subject_id',$data['subject'])
                    ->where('user_id',$data['user'])
                    ->where('class_id',$data['class'])
                    ->update(['first_grading' => $data['value']]);

                return $grade;
                break;
            case 2:
                $grade = Grades::where('subject_id',$data['subject'])
                    ->where('user_id',$data['user'])
                    ->where('class_id',$data['class'])
                    ->update(['second_grading' => $data['value']]);

                return $grade;
                break;
            case 3:
                $grade = Grades::where('subject_id',$data['subject'])
                    ->where('user_id',$data['user'])
                    ->where('class_id',$data['class'])
                    ->update(['third_grading' => $data['value']]);

                return $grade;

                break;

            case 4:
                $grade = Grades::where('subject_id',$data['subject'])
                    ->where('user_id',$data['user'])
                    ->where('class_id',$data['class'])
                    ->update(['fourth_grading' => $data['value']]);

                return $grade;

                break;
            default:
                # code...
                break;
        }
       
        return $save;
    }

    public function editDiagnostic($data)
    {
        switch ($data['id']) {
            case 1:
                $diagnostic = DiagnosticExam::where('LRN',$data['lrn'])
                            ->update(['English' => $data['value']]);
                
                return $diagnostic;
                break;
            case 2:
                $diagnostic = DiagnosticExam::where('LRN',$data['lrn'])
                            ->update(['Filipino' => $data['value']]);
                
                return $diagnostic;
                break;
            case 3:
                $diagnostic = DiagnosticExam::where('LRN',$data['lrn'])
                            ->update(['Math' => $data['value']]);
                
                return $diagnostic;
                break;
            case 4:
                $diagnostic = DiagnosticExam::where('LRN',$data['lrn'])
                            ->update(['Science' => $data['value']]);
                
                return $diagnostic;
                break;
            case 5:
                $diagnostic = DiagnosticExam::where('LRN',$data['lrn'])
                            ->update(['Aral_Pan' => $data['value']]);
                
                return $diagnostic;
                break;
            default:
                # code...
                break;
        }
    }

    public function getAverage($data)
    {
        $diagnostic = DiagnosticExam::where('LRN',$data['lrn'])
                    ->selectRaw('sum(English + Filipino + Aral_Pan + Math + Science) as total')
                    ->get();
        $total = $diagnostic[0]['total'] / 5;

        $exam = DiagnosticExam::where('LRN',$data['lrn'])
                    ->update(['Average' => $total]);

        return $exam;
    }

    public function assignSection($data)
    {
        $sections = Section::where('from','<',$data['total'])
                            ->where('to','>',$data['total'])
                            ->get();
        $students = Student::where('LRN',$data['lrn'])
                    ->update(['section_id' => $sections[0]['id']]);
        return $sections;
    }

    public function editDepartment($data)
    {
        $depart = Department::find($data['id']);
        $depart->department_name = $data['depart_name'];
        $depart->description = $data['description'];
        $depart->save();

        return $depart;
    }

    public function addSubject($data)
    {
        switch ($data['year']) {
            case 1:
                $seven = new GradeSevenSubject();
                $seven->subject_name = $data['add_subject'];
                $seven->department_id = $data['department'];
                $seven->year_level_id = $data['year'];
                $seven->description = $data['description'];
                $seven->save();
                
                return $seven;
                break;
            case 2:
                $eight = new GradeEightSubject();
                $eight->subject_name = $data['add_subject'];
                $eight->department_id = $data['department'];
                $eight->year_level_id = $data['year'];
                $eight->description = $data['description'];
                $eight->save();
                
                return $eight;
                break;
            case 3:
                $nine = new GradeNineSubject();
                $nine->subject_name = $data['add_subject'];
                $nine->department_id = $data['department'];
                $nine->year_level_id = $data['year'];
                $nine->description = $data['description'];
                $nine->save();
                
                return $nine;
                break;
            case 4:
                $ten = new GradeTenSubject();
                $ten->subject_name = $data['add_subject'];
                $ten->department_id = $data['department'];
                $ten->year_level_id = $data['year'];
                $ten->description = $data['description'];
                $ten->save();
                
                return $ten;
                break;
            default:
                # code...
                break;
        }

    }

    public function addSubjectset($data)
    {
        switch ($data['year']) {
            case 5:
                $eleven = new GradeElevenSubject();
                $eleven->subject_name = $data['add_subject'];
                $eleven->department_id = $data['department'];
                $eleven->year_level_id = $data['year'];
                $eleven->description = $data['description'];
                $eleven->semester = $data['semester'];
                $eleven->save();
                
                return $eleven;
                break;
            case 6:
                $twelve = new GradeTwelveSubject();
                $twelve->subject_name = $data['add_subject'];
                $twelve->department_id = $data['department'];   
                $twelve->year_level_id = $data['year'];
                $twelve->description = $data['description'];
                $twelve->semester = $data['semester'];
                $twelve->save();
                
                return $twelve;
                break;
            default:
                # code...
                break;
        }
    }

    public function editSubject($data)
    {
        switch ($data['edityear']) {
            case 1:
                $seven = GradeSevenSubject::find($data['id']);
                $seven->subject_name = $data['add_subject'];
                $seven->department_id = $data['editdepartment'];
                $seven->year_level_id = $data['edityear'];
                $seven->description = $data['description'];
                $seven->save();
                
                return $seven;
                break;
            case 2:
                $eight = GradeEightSubject::find($data['id']);
                $eight->subject_name = $data['add_subject'];
                $eight->department_id = $data['editdepartment'];
                $eight->year_level_id = $data['edityear'];
                $eight->description = $data['description'];
                $eight->save();
                
                return $eight;
                break;
            case 3:
                $nine = GradeNineSubject::find($data['id']);
                $nine->subject_name = $data['add_subject'];
                $nine->department_id = $data['editdepartment'];
                $nine->year_level_id = $data['edityear'];
                $nine->description = $data['description'];
                $nine->save();
                
                return $nine;
                break;
            case 4:
                $ten = GradeTenSubject::find($data['id']);
                $ten->subject_name = $data['add_subject'];
                $ten->department_id = $data['editdepartment'];
                $ten->year_level_id = $data['edityear'];
                $ten->description = $data['description'];
                $ten->save();
                
                return $ten;
                break;
            default:
                # code...
                break;
        }
    }

    public function editSubjectset($data)
    {
        switch ($data['edityear']) {
            case 5:
                $eleven = GradeElevenSubject::find($data['id']);
                $eleven->subject_name = $data['add_subject'];
                $eleven->department_id = $data['editdepartment'];
                $eleven->year_level_id = $data['edityear'];
                $eleven->description = $data['description'];
                $eleven->semester = $data['editsemester'];
                $eleven->save();
                
                return $eleven;
                break;
            case 6:
                $twelve = GradeTwelveSubject::find($data['id']);
                $twelve->subject_name = $data['add_subject'];
                $twelve->department_id = $data['editdepartment'];   
                $twelve->year_level_id = $data['edityear'];
                $twelve->description = $data['description'];
                $twelve->semester = $data['editsemester'];
                $twelve->save();
                
                return $twelve;
                break;
            default:
                # code...
                break;
        }
    }

    public function getSubject($data)
    {
        switch ($data['level']) {
            case 1:
                $seven = GradeSevenSubject::where('id',$data['section'])->get();
                return $seven;
                break;
            case 2:
                $eight = GradeEightSubject::where('id',$data['section'])->get();
                return $eight;
                break;
            case 3:
                $nine = GradeNineSubject::where('id',$data['section'])->get();
                return $nine;
                break;
            default:
                $ten = GradeTenSubject::where('id',$data['section'])->get();
                return $ten;
                break;
                
        }
    }


} 