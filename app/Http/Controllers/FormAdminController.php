<?php

namespace Hamedan_2018\Http\Controllers;

use Hamedan_2018\Form;
use Hamedan_2018\UserPermission;
use Hamedan_2018\UuId;
use Illuminate\Support\Facades\Auth;

class FormAdminController extends Controller
{
    private function checkUserPermission($fId)
    {
        $pId = Form::where('id' , $fId)->first();
        if ($pId)
            return UserPermission::where('upPId' , $pId->fPrId)->where('upUId' , Auth::user()->id)->exists();
        else
            return false;
    }

    function form($fId)
    {
        if ($this->checkUserPermission($fId))
        {
/*            $rows = UuId::whereHas('formAnswer.questionForm' , function ($q) use($fId){
                return $q->where('qfFrId' , $fId);
            })->with('formAnswer.questionForm.question.fieldType')
              ->with('formAnswer.questionForm.question.fieldOption.option')->get();*/

            $formSubject = Form::find($fId)->fFaSubject;
            return view('pages.admin.allForms' , ['formSubject' => $formSubject , 'fId' => $fId]);
        }else{
            return abort(404);
        }
    }
}
