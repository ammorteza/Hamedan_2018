<?php

namespace Hamedan_2018;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $table = 'tbl_forms';

    public function questionForm()
    {
        return $this->hasMany(QuestionForm::class, 'qfFrId' , 'id')->where('qfState' , '=' , 1)->orderBy('qfOrder' , 'ASC');
    }

    public function permission()
    {
        return $this->belongsTo(Permission::class , 'fPrId' , 'id');
    }

    public static function getForm($id)
    {
        return Form::where('id' , '=' , $id)
            ->with('questionForm.question.fieldOption.option')
            ->with('questionForm.questionStep')
            ->with('questionForm.question.fieldType')
            ->with('questionForm.pattern')
            ->first();
    }

    public static function getStepsCount($fId)
    {
        return QuestionForm::where('qfFrId' , '=' , $fId)->select('qfQsId')->groupBy(['qfQsId'])->get()->count();
    }

    public static function getAllFormsThatHasPermission($uId)
    {
        return Form::whereHas('permission.userPermission' , function ($q) use($uId){
            return $q->where('upUId' , $uId);
        })->get();
    }
}
