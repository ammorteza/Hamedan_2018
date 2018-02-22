<?php

namespace Hamedan_2018;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $table = 'tbl_sections';

    public function sectionType()
    {
        return $this->belongsTo(SectionType::class ,'sStId' , 'id');
    }

    public function sectionImg()
    {
        return $this->hasMany(SectionImg::class ,'siSId' , 'id');
    }

    public function sectionVideo()
    {
        return $this->hasMany(SectionVideo::class ,'svSId' , 'id');
    }
}
