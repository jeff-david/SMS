<?php

namespace SMS\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = [
        'section_name',
        'year_level_id'
    ];
}
