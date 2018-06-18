<?php

namespace Hamedan_2018;

use Illuminate\Database\Eloquent\Model;

class QuestionStep extends Model
{
    protected $table = 'tbl_question_steps';

    public function questionForm()
    {
        return $this->hasMany(QuestionForm::class , 'qfQsId' , 'id');
    }

    public static function getSteps($fId)
    {
        return QuestionStep::whereHas('questionForm' , function ($q) use ($fId){
            return $q->where('qfFrId' , '=' , $fId);
        })->get();
    }
}
