<?php 

namespace App\Http\Controllers\Principal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PrincipalController extends Controller
{
    public function announce()
    {
        return view('principal.announcement');
    }
}