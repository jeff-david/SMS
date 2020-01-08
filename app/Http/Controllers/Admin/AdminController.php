<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.register_student');
    }

    public function teacher()
    {
        return view('admin.register_teacher');
    }

    public function class_view()
    {
        return view('admin.class');
    }
    public function studentlist()
    {
        return view('admin');
    }


}
