<?php

namespace SMS\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Section extends Model
{
    use SoftDeletes;
    public function student()
    {
        return $this->hasMany('Student');
    }
}
