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

    public static function getNewNews($lan)
    {
        if ($lan == 'fa')
        {
            $newsCount = News::where('nState' , '=' , 1)
                ->where('nFaSubject' , '<>' , '')
                ->where('nFaBriefDescription' , '<>' , '')
                ->where('nFaDescription' , '<>' , '')
                ->count();
            if ($newsCount > 0)
                return News::where('nState' , '=' , 1)
                    ->where('nFaSubject' , '<>' , '')
                    ->where('nFaBriefDescription' , '<>' , '')
                    ->where('nFaDescription' , '<>' , '')
                    ->with('newsImg.gallery')
                    ->orderBy('id' , 'DESC')
                    ->get()->random($newsCount < 4 ? $newsCount : 4);
            else
                return null;
        }else if ($lan == 'ar'){
            $newsCount = News::where('nState' , '=' , 1)
                ->where('nArSubject' , '<>' , '')
                ->where('nArBriefDescription' , '<>' , '')
                ->where('nArDescription' , '<>' , '')
                ->count();
            if ($newsCount > 0)
                return News::where('nState' , '=' , 1)
                    ->where('nArSubject' , '<>' , '')
                    ->where('nArBriefDescription' , '<>' , '')
                    ->where('nArDescription' , '<>' , '')
                    ->with('newsImg.gallery')
                    ->orderBy('id' , 'DESC')
                    ->get()->random($newsCount < 4 ? $newsCount : 4);
            else
                return null;
        }else if ($lan == 'en'){
            $newsCount = News::where('nState' , '=' , 1)
                ->where('nEnSubject' , '<>' , '')
                ->where('nEnBriefDescription' , '<>' , '')
                ->where('nEnDescription' , '<>' , '')
                ->count();
            if ($newsCount > 0)
                return News::where('nState' , '=' , 1)
                    ->where('nEnSubject' , '<>' , '')
                    ->where('nEnBriefDescription' , '<>' , '')
                    ->where('nEnDescription' , '<>' , '')
                    ->with('newsImg.gallery')
                    ->orderBy('id' , 'DESC')
                    ->get()->random($newsCount < 4 ? $newsCount : 4);
            else
                return null;
        }
    }
}
