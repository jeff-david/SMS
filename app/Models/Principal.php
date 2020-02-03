<?php

namespace SMS\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Principal extends Authenticatable
{
    use Notifiable;

    protected $guard = 'principal';
}
