<?php

namespace Hamedan_2018;

use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    protected $table = 'tbl_sponsors';

    public static function getAllSponsors()
    {
        return Sponsor::where('sState' , '=' , true)->get();
    }
}
