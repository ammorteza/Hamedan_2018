<?php

namespace Hamedan_2018;

use Illuminate\Database\Eloquent\Model;

class NewsImg extends Model
{
    protected $table = 'tbl_news_img';

    public function gallery()
    {
        return $this->belongsTo(ImageGallery::class , 'niGId' , 'id');
    }
}
