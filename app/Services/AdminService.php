<?php

namespace SMS\Services;

use SMS\Models\Student;
use Hash;


class AdminService
{
    /** @var \SMS\Models\Student **/
    private $studentList;

    /**
     * AdminService constructor.
     *
     * @param Student $studentList
     *
     *
     */
    function __construct(Student $studentList)
    {

        $this->studentList = $studentList;
        
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
}