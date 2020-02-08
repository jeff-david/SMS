<?php

namespace SMS\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    protected $guard = 'student';

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
        'year_level_id'
       
        
    ];

    public function section_name()
    {
        return $this->belongsTo('section_name','id');
    }
}
