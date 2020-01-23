<?php

namespace SMS\Services;

use SMS\Models\Student;
use SMS\Models\Teacher;
use SMS\Models\Section;
use SMS\Models\YearLevel;
use Hash;


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

    /**
     * AdminService constructor.
     *
     * @param Student $studentList
     * @param Teacher $teacherList
     * @param Section $sectionList
     * @param Teacher $yearlevelList
     *
     *
     */
    function __construct(Student $studentList,Teacher $teacherList,Section $sectionList,YearLevel $yearlevelList)
    {
        $this->studentList = $studentList;
        $this->teacherList = $teacherList;
        $this->sectionList = $sectionList;
        $this->yearlevelList = $yearlevelList;
  
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

    public function getAllSection()
    {
        $section = YearLevel::join('sections', 'sections.year_level_id', '=', 'year_levels.id')
                    ->select('year_levels.id','sections.section_name','year_levels.color','year_levels.yearlevel')
                    ->where('sections.year_level_id', '=','1')
                    ->get();
        return $section;
    }

    public function getAllSectionById($yearlevel)
    {
        $id = $yearlevel->id;
        $section = YearLevel::join('sections', 'sections.year_level_id', '=', 'year_levels.id')
                    ->select('year_levels.id','sections.section_name','year_levels.color','year_levels.yearlevel')
                    ->where('sections.year_level_id', '=',$id)
                    ->get();
        return $section;
    }

    public function getAllSubject($id)
    {
        
        $subject = YearLevel::join('subjects', 'subjects.year_level_id', '=', 'year_levels.id')
                    ->select('year_levels.id','subjects.department_id','subjects.subject_name','year_levels.color')
                    ->where('subjects.year_level_id','=',$id)
                    ->get();

        return $subject;
    }
}