<?php

namespace Hamedan_2018;

use Illuminate\Database\Eloquent\Model;

class SectionVideo extends Model
{
    protected $table = 'tbl_section_videos';

    public function gallery()
    {
        return $this->belongsTo(VideoGallery::class ,'svVgId' , 'id');
    }
}
