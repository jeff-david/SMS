<?php

namespace SMS\Models;

use Illuminate\Database\Eloquent\Model;

class Assign extends Model
{
    protected $fillable = [
        'section_id',
        'teacher_id',
        'subject_id',
        'schedule_time',
    ];
}
