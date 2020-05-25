<?php

namespace SMS\Models;

use Illuminate\Database\Eloquent\Model;

class DiagnosticExam extends Model
{
    protected $fillable = [
        'LRN',
        'Filipino',
        'English',
        'Math',
        'Science'
    ];
}
