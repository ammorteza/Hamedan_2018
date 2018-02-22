<?php

namespace Hamedan_2018;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = 'tbl_pages';

    public function pageHeaderImg()
    {
        return $this->hasMany(PageHeaderImg::class , 'phiPId' , 'id')->where('phiState' , '=' , true)->orderBy('phiOrder' , 'ASC')->take(4);
    }

    public function section()
    {
        return $this->hasMany(Section::class , 'sPId' , 'id')->where('sState' , '=' , true)->orderBy('sOrder' , 'ASC');
    }

    public function headerType()
    {
        return $this->belongsTo(PageHeaderType::class , 'pPhtId' , 'id');
    }

    public function breadCrumb()
    {
        return $this->hasMany(PageBreadCrumb::class , 'pbPId' , 'id');
    }
}
