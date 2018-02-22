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

    public static function getNewNews()
    {
        $newsCount = News::where('nState' , '=' , 1)->count();
        if ($newsCount > 0)
            return News::where('nState' , '=' , 1)->with('newsImg.gallery')->orderBy('id' , 'DESC')->get()->random($newsCount < 4 ? $newsCount : 4);
        else
            return null;
    }
}
