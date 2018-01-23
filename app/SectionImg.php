<?php

namespace Hamedan_2018;

use Illuminate\Database\Eloquent\Model;

class SectionImg extends Model
{
    protected $table = 'tbl_section_imgs';

    public function gallery()
    {
        return $this->belongsTo(ImageGallery::class ,'siGId' , 'id');
    }
}
