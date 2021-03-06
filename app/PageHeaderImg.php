<?php

namespace Hamedan_2018;

use Illuminate\Database\Eloquent\Model;

class PageHeaderImg extends Model
{
    protected $table = 'tbl_page_header_img';

    public function image()
    {
        return $this->belongsTo(ImageGallery::class , 'phiGId' , 'id');
    }
}
