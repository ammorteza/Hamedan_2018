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

    public static function getFormRecords($fId)
    {
        $records = UuId::whereHas('formAnswer.questionForm' , function ($q) use($fId){
            return $q->where('qfFrId' , $fId);
        })->paginate(20);
        return $records;
    }
}
