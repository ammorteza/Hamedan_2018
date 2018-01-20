<?php

namespace Hamedan_2018;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = 'tbl_pages';

    public function pageHeaderImg()
    {
        return $this->hasMany(PageHeaderImg::class , 'phiPId' , 'id');
    }

    public function section()
    {
        return $this->hasMany(Section::class , 'sPId' , 'id');
    }
}
