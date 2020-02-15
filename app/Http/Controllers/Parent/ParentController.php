<?php

namespace SMS\Http\Controllers\Parent;

use Illuminate\Http\Request;
use SMS\Http\Controllers\Controller;
use SMS\Models\Announcement;
use SMS\Services\ParentService;

class ParentController extends Controller
{
    private $parentService;

    function __construct(ParentService $parentService)
    {
        $this->parentService = $parentService;
    }

    public function announcement()
    {
        $announcement = Announcement::where('type_id','>=',0)->pluck('type_id')->toArray();
        
        $announcement = $this->parentService->announcement($announcement);
        
        return view('parent.announcement',compact('announcement'));
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
