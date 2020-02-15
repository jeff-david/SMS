<?php

namespace SMS\Services;

use SMS\Models\Announcement;
use Carbon\Carbon;

class PrincipalService 
{
     /** @var \SMS\Models\Announcement **/
     private $announcementList;

     /**
     * PrincipalService constructor.
     *
     * @param Announcement $announcementList
     *
     *
     */

    public function __construct(Announcement $announcementList)
    {
        $this->announcementList = $announcementList;
    }

    public function store_announce($data)
    {
        $announcement = [];
        $announcement['title'] = $data['topic'];
        $announcement['body'] = $data['content'];
        $announcement['type_id'] = $data['type'];
        $announcement['post_date'] = Carbon::now();
        $announcement['user_id'] = 2;

        $rtn = $this->announcementList->create($announcement);

        $rtn->save();

        return $rtn;
    }
}
