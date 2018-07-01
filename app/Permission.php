<?php

namespace Hamedan_2018;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Permission extends Model
{
    protected $table = 'tbl_permission';

    public function userPermission()
    {
        return $this->hasMany(UserPermission::class, 'upUId' , 'id');
    }

    public static function checkPermission($p)
    {
        if (is_array($p))
        {
            return UserPermission::whereHas('permission' , function ($q) use($p){
                return $q->whereIn('pPermission' , $p);
            })->where('upUId' , Auth::user()->id)->exists();
        }else{
            return UserPermission::whereHas('permission' , function ($q) use($p){
                return $q->where('pPermission' , $p);
            })->where('upUId' , Auth::user()->id)->exists();
        }

    }
}
