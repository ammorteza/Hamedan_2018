<?php

namespace Hamedan_2018;

use Illuminate\Database\Eloquent\Model;

class NewsSlider extends Model
{
    protected $table = 'tbl_news_slider';

    public function gallery()
    {
        return $this->belongsTo(ImageGallery::class , 'nsGId' , 'id');
    }
}
