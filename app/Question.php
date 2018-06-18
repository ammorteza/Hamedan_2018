<?php

namespace Hamedan_2018;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'tbl_questions';

    public function fieldOption()
    {
        return $this->hasMany(FieldOption::class, 'foQId' , 'id');
    }


    public function fieldType()
    {
        return $this->belongsTo(FieldType::class ,'qFtId' , 'id');
    }
}
