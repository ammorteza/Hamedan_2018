<?php

namespace Hamedan_2018;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'tbl_events';

    public function gallery()
    {
        return $this->belongsTo(ImageGallery::class ,'eGId' , 'id');
    }

    public static function getAllEvents($eventType)
    {
        return Event::where('eState' , '<>' , 0)->where('eType' , '=' , $eventType)->with('gallery')->orderBy('eOrder' , 'DESC')->get();
    }
}
