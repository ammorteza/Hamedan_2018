<?php

namespace Hamedan_2018;

use Illuminate\Database\Eloquent\Model;

class FormAnswer extends Model
{
    protected $table = 'tbl_form_answers';

    public function questionForm()
    {
        return $this->belongsTo(QuestionForm::class ,'faQfId' , 'id');
    }
}
