<?php

namespace SMS\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        
        'LRN',
        'firstname',
        'lastname',
        'middlename',
        'register_date',
        'gender',
        'birthday',
        'religion',
        'street_address',
        'city',
        'province',
        'mother_name',
        'mother_occupation',
        'father_name',
        'father_occupation',
        'guardian_lastname',
        'guardian_firstname',
        'guardian_middlename',
        'rel_student',
        'current_res',
        'guardian_rel',
        'mother_tounge',
        'username',
        'password',
        'dialects',
        'ethnicities',
        'cell_1',
       
        
    ];
}
