<?php

namespace Hamedan_2018;

use Illuminate\Database\Eloquent\Model;

class Advertise extends Model
{
    protected $table = 'tbl_advertises';

    public function gallery()
    {
        return $this->belongsTo(ImageGallery::class ,'aGId' , 'id');
    }
}
