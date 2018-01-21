<?php

namespace Hamedan_2018;

use Illuminate\Database\Eloquent\Model;

class SubMenu extends Model
{
    protected $table = 'tbl_sub_menus';

    public static function getAllSubMenuWithMainMenuId($mId)
    {

        $subMenu = SubMenu::where('smMmId' , '=' , $mId)->where('smState' , '=' , true)->get();
        return$subMenu;
    }
}

