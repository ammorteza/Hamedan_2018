<?php

namespace Hamedan_2018;

use Illuminate\Database\Eloquent\Model;

class MainMenu extends Model
{
    protected $table = 'tbl_main_menus';

    public function subMenu()
    {
        return $this->hasMany(SubMenu::class , 'smMmId' , 'id');
    }
}
