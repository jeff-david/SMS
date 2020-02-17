<?php

namespace SMS\Http\Controllers\Auth;

use Illuminate\Http\Request;
use SMS\Http\Controllers\Controller;
use SMS\Http\Requests\Admin\AdminRequest;
use SMS\Http\Requests\Principal\PrincipalRequest;
use SMS\Http\Requests\Teacher\TeacherRequest;
use SMS\Http\Requests\Login\LoginRequest;
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

    public function showLoginForm()
    {
        return view('auth.admin_login');
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

        }elseif (Auth::guard('student')->check()) {
            Auth::guard('student')->logout();

            return redirect('/login/parent');
        }
    }

    public function showTeacherLoginForm()
    {
        return view('auth.teacher_login');
    }

    public function teacherLogin(PrincipalRequest $request)
    {
       
        try{
            if (Auth::guard('teacher')->attempt(['username' => $request->username,'password' => $request->password])) {
                return redirect()->intended('/teacher');
            }
        }catch(Exception $e){
            return redirect()->back()->withInput()->with(['failed'=>'Please Check Your Credentials']);
        }
        return redirect()->intended('/teacher');
    }

    public function showParentLoginForm()
    {
        return view('auth.parent_login');
    }

    public function parentLogin(LoginRequest $request)
    {
        try{
            if (Auth::guard('student')->attempt(['username' => $request->username,'password' => $request->password])) {
                return redirect()->intended('/parent');
            }
        }catch(Exception $e){
            return redirect()->back()->withInput()->with(['failed'=>'Please Check Your Credentials']);
        }
        return redirect()->intended('/parent');
    }
}
