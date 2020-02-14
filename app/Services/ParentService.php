<?php

namespace SMS\Services;

class ParentService 
{
   
   public function announcement($announcement)
   {
       dd($announcement);
        $announcement = $announcement->where('announcements.type_id','=',1)->where('announcements.type_id','=',0);
        return $announcement; 
   }

}
