<?php

namespace SMS\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public function student()
    {
        return $this->hasMany('Student');
    }
}
