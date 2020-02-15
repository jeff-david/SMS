<?php

namespace SMS\Models;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    protected $fillable =[
        'title','body','post_date','type_id','user_id'
    ];
}
