<?php

namespace SMS\Http\Controllers\Auth;

use Illuminate\Http\Request;
use SMS\Http\Controllers\Controller;
use SMS\Http\Requests\Admin\AdminRequest;
use SMS\Http\Requests\Principal\PrincipalRequest;
use SMS\Http\Requests\Teacher\TeacherRequest;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
        $this->middleware('guest:principal')->except('logout');
        $this->middleware('guest:teacher')->except('logout');
        $this->middleware('guest:student')->except('logout');
    }

    public function showAdminLoginForm()
    {
        return view('auth.admin_login');
    }

    public function adminLogin(AdminRequest $request)
    {
       
        if (Auth::guard('admin')->attempt(['username' => $request->username,'password' => $request->password])) {
            return redirect()->intended('/admin');
        }
        return redirect()->back()->withInput()->with(['failed'=>'Please Check Your Credentials']);
    }

    public function showPrincipalLoginForm()
    {
        return view('auth.principal_login');
    }

    public function principalLogin(PrincipalRequest $request)
    {
        if (Auth::guard('principal')->attempt(['username' => $request->username,'password' => $request->password])) {
            return redirect()->intended('/principal');
        }
        return redirect()->back()->withInput()->with(['failed'=>'Please Check Your Credentials']);
    }

    public function logout(Request $request)
    {
        if(Auth::guard('admin')->check()) {

            Auth::guard('admin') -> logout();

            return redirect('/login/admin');

        }elseif(Auth::guard('principal')->check()) {

            Auth::guard('principal')->logout();

            return redirect('/login/principal');

        }elseif(Auth::guard('teacher')->check()) {

        Auth::guard('teacher')->logout();
        
        return redirect('/login/teacher');
        }
    }

    public function showTeacherLoginForm()
    {
        return view('auth.teacher_login');
    }

    public function teacherLogin(TeacherRequest $request)
    {
        if (Auth::guard('teacher')->attempt(['username' => $request->username,'password' => $request->password])) {
            return redirect()->intended('/teacher');
        }
        return redirect()->back()->withInput()->with(['failed'=>'Please Check Your Credentials']);
    }

    public function showParentLoginForm()
    {
        return view('auth.parent_login');
    }
}
