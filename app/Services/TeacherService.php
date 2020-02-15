<?php

namespace SMS\Services;
use SMS\Models\Announcement;

class TeacherService 
{
   
   public function announcement($id)
   {
       
    $announcement['admin'] = Announcement::where(function($query)
                            {
                                $query->where('announcements.type_id',0);
                                $query->orWhere('announcements.type_id','=',2);
                            })
                            ->join('admins','admins.user_id','=','announcements.user_id')
                            ->get();

    $announcement['principal'] = Announcement::where(function($query)
                                {
                                    $query->where('announcements.type_id',0);
                                    $query->orWhere('announcements.type_id','=',2);
                                })
                                ->join('principals','principals.user_id','=','announcements.user_id')
                                ->get();

        return $announcement; 
   }

}
