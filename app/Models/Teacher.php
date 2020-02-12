<?php

namespace SMS\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Teacher extends Authenticatable
{
    use Notifiable;

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
