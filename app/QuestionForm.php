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

    public function pattern()
    {
        return $this->belongsTo(Pattern::class ,'qfPId' , 'id');
    }
}
