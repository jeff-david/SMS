<?php

namespace SMS\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{

    protected $guard = 'teacher';

    protected $fillable = [
        
        'departments_id',
        'firstname',
        'lastname',
        'middlename',
        'register_date',
        'gender',
        'birthdate',
        'religion',
        'username',
        'password',
        'age',
        'cell_no',
        'street_address',
        'city',
        'province',
        'date_graduated',
        'school_graduated',
        'handle_classes',
       
        
    ];
}
