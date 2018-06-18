<?php

namespace Hamedan_2018;

use Illuminate\Database\Eloquent\Model;

class FieldOption extends Model
{
    protected $table = 'tbl_field_options';

    public function option()
    {
        return $this->belongsTo(Option::class ,'foOId' , 'id');
    }
}
