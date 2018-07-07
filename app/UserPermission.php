<?php

namespace Hamedan_2018;

use Illuminate\Database\Eloquent\Model;

class UserPermission extends Model
{
    protected $table = 'tbl_user_permission';

    public function permission()
    {
        return $this->belongsTo(Permission::class , 'upPId' , 'id');
    }
}
