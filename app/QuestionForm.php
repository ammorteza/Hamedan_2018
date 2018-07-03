<?php

namespace Hamedan_2018;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Console\Helper\QuestionHelper;

class QuestionForm extends Model
{
    protected $table = 'tbl_question_forms';

    public function question()
    {
        return $this->belongsTo(Question::class ,'qfQId' , 'id');
    }

    public function questionStep()
    {
        return $this->belongsTo(QuestionStep::class ,'qfQsId' , 'id');
    }

    public function form()
    {
        return $this->belongsTo(Form::class ,'qfFrId' , 'id');
    }

    public function pattern()
    {
        return $this->belongsTo(Pattern::class ,'qfPId' , 'id');
    }

    public function formAnswer()
    {
        return $this->hasMany(FormAnswer::class, 'faQfId' , 'id');
    }

    public static function getAllQuestionForm($fId , $uuId)
    {
        $questionForms = QuestionForm::where('qfFrId' , $fId)
            ->with(['formAnswer' => function($q) use($uuId){
                return $q->where('faUuId' , $uuId);
            }])
            ->with('question.fieldType')
            ->with('question.fieldOption')
            ->orderBy('qfOrder')
            ->get();
        return $questionForms;
    }
}
