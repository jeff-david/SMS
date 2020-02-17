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
use SMS\Models\Announcement;
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

    /**
     * AdminService constructor.
     *
     * @param Student $studentList
     * @param Teacher $teacherList
     * @param Section $sectionList
     * @param Teacher $yearlevelList
     * @param Announcement $announcementList
     *
     *
     */
    function __construct(Student $studentList,Teacher $teacherList,Section $sectionList,YearLevel $yearlevelList,Announcement $announcementList,Admin $adminList)
    {
        $this->studentList = $studentList;
        $this->teacherList = $teacherList;
        $this->sectionList = $sectionList;
        $this->yearlevelList = $yearlevelList;
        $this->announcementList = $announcementList;
        $this->adminList = $adminList;
  
    }


    public function store($data)
    {
        $student = [];
        $student['LRN'] = $data['LRN'];
        $student['lastname'] = $data['lastname'];
        $student['firstname'] = $data['firstname'];
        $student['middlename'] = $data['middlename'];
        $student['register_date'] = $data['register_date'];
        $student['username'] = $data['username'];
        $student['password'] = Hash::make($data['password']);
        $student['gender'] = $data['gender'];
        $student['birthday'] = $data['birthday'];
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
        $student['cell_1'] = $data['cell_1'];
    

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
        $subject = Subject::where('subjects.year_level_id','=',$id)
                    ->get();

        return $subject;
    }
    public function get_Section($id)
    {
        $section = Classes::join('sections', 'sections.class_id', '=', 'classes.id')
                    ->select('sections.*')
                    ->where('sections.class_id','=',$id)
                    ->get();
        return $section;
    }

    public function student_update($data)
    {
        dd($data);
        $student = $this->studentList->find($data['id']);
        $student->LRN = $data['LRN'];
        $student->lastname = $data['lastname'];
        $student->firstname = $data['firstname'];
        $student->middlename = $data['middlename'];
        $student->register_date = $data['register_date'];
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
        $student->sectio_id = 1;
        $student->save();

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
        $announcement['post_date'] = Carbon::now();
        $announcement['user_id'] = 1;

        $rtn = $this->announcementList->create($announcement);
        
        $rtn->save();
        if($rtn){
            $id = $rtn->user_id;
            $username = Admin::where('user_id',$id)->pluck('first_name');
            event(new \SMS\Events\PostAnnouncement($username));
        };
        return $rtn;
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

    public function change_contact($contact,$id)
    {
        $admin = $this->adminList->find($id);
        $admin->contact_number = $contact;
        $admin->save();
        return $admin;
    }

    public function change_address($address,$id)
    {
        $admin = $this->adminList->find($id);
        $admin->address = $address;
        $admin->save();
        return $admin;
    }
} 