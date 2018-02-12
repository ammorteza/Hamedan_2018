<?php

namespace Hamedan_2018;

use Illuminate\Database\Eloquent\Model;

class PageBreadCrumb extends Model
{
    protected $table = 'tbl_page_breadcrumbs';

    public function refPage()
    {
        return $this->belongsTo(Page::class , 'pbPPId' , 'id')->select( 'id' ,'pFaSubject' , 'pEnSubject' , 'pArSubject' , 'pLinkUrl');
    }
}
