<?php

namespace Hamedan_2018\Http\Controllers;

use Hamedan_2018\Form;
use Hamedan_2018\UserPermission;
use Hamedan_2018\UuId;
use Illuminate\Support\Facades\App;
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

    private function initPdf()
    {
        $pdf = App::make('snappy.pdf.wrapper');
        $pdf->setOption('encoding', 'UTF-8');
        $pdf->setOption('page-size', 'a4');
        $pdf->setOption('title', 'report');
        $pdf->setOption('footer-center', '[page]/[topage]');
        $pdf->setOption('margin-bottom', 25);
        $pdf->setOrientation('portrait');
        $pdf->setOption('margin-top', 20);
        $pdf->setOption('lowquality', true);
        $pdf->setOption('zoom', 1.2);
        return $pdf;
    }

    function report($fId , $uuId)
    {
        $pdf = $this->initPdf();
        $pdf->loadHTML('<p>morteza</p>');
        return $pdf->inline();
    }
}
