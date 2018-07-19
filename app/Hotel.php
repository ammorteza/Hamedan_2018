<?php

namespace Hamedan_2018;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table = 'tbl_hotels';

    public function gallery()
    {
        return $this->belongsTo(ImageGallery::class ,'hGId' , 'id');
    }

    public static function getAllHotel($special)
    {
        return Hotel::where('hState' , '=' , 1)->where('hSpecial' , '=' , $special)->with('gallery')->get();
    }
}
