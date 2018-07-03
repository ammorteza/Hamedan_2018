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

    public function questionForm()
    {
        return $this->hasMany(QuestionForm::class, 'qfQId' , 'id');
    }

    public static function getAllFormFields($fId)
    {
        $fields = Question::whereHas('questionForm' , function ($q) use($fId){
            return $q->where('qfFrId' , $fId);
        })->with('fieldType')->take(6)->get();
        return $fields;
    }

    public static function getAllFormAnswers($fId , $uuId)
    {
        $answers = Question::whereHas('questionForm' , function ($q) use($fId){
            return $q->where('qfFrId' , $fId);
        })->with(['questionForm.formAnswer' => function ($q) use($uuId){
            return $q->where('faUuId' , $uuId);
        }])->with('fieldType')
        ->get();
        return $answers;
    }
}
