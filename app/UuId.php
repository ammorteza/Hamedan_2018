<?php

namespace Hamedan_2018;

use Illuminate\Database\Eloquent\Model;

class UuId extends Model
{
    protected $table = 'tbl_uuids';

    public function formAnswer()
    {
        return $this->hasMany(FormAnswer::class, 'faUuId' , 'id');
    }
}
