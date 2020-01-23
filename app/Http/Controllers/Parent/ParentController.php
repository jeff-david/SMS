<?php

namespace SMS\Http\Controllers\Parent;

use Illuminate\Http\Request;
use SMS\Http\Controllers\Controller;

class ParentController extends Controller
{
    public function announcement()
    {
        return view('parent.announcement');
    }

    public function grade()
    {
        return view('parent.grade');
    }

    public function profile()
    {
        return view('parent.profile');
    }

    public function concern()
    {
        return view('parent.concern');
    }
}
