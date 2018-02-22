<?php

namespace Hamedan_2018;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'tbl_news';

    public function newsImg()
    {
        return $this->hasMany(NewsImg::class , 'niNId' , 'id');
    }
}
