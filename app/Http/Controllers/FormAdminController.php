<?php

namespace Hamedan_2018\Http\Controllers;

use Elibyy\TCPDF\Facades\TCPDF;
use Hamedan_2018\Form;
use Hamedan_2018\QuestionForm;
use Hamedan_2018\UserPermission;
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
/*        $pdf = App::make('snappy.pdf.wrapper');
        $pdf->setOption('encoding', 'UTF-8');
        $pdf->setOption('page-size', 'a4');
        $pdf->setOption('title', 'report');
        $pdf->setOption('footer-center', '[page]/[topage]');
        $pdf->setOption('margin-bottom', 25);
        $pdf->setOrientation('portrait');
        $pdf->setOption('margin-top', 20);
        $pdf->setOption('lowquality', true);
        $pdf->setOption('zoom', 1.5);
        return $pdf;*/

        return [
            'mode'                 => '',
            'format'               => 'A5',
            'default_font_size'    => '20',
            'default_font'         => 'BYekan',
            'margin_left'          => 10,
            'margin_right'         => 10,
            'margin_top'           => 10,
            'margin_bottom'        => 10,
            'margin_header'        => 0,
            'margin_footer'        => 0,
            'orientation'          => 'P',
            'title'                => 'report',
            'author'               => '',
            'watermark'            => '',
            'show_watermark'       => false,
            'watermark_font'       => 'sans-serif',
            'display_mode'         => 'fullpage',
            'watermark_text_alpha' => 0.1
        ];
    }

    function report($fId , $uuId)
    {
        $info = QuestionForm::getAllQuestionForm($fId , $uuId);
/*        \PDF::AddPage();
        \PDF::writeHTML(view('pages.admin.reports.icf_report' , ['info' => $info]));
        \PDF::Output('hello_world.pdf');*/
        \PDF::loadView('pages.admin.reports.icf_report' , ['info' => $info])->output();
        //$pdf = new \Elibyy\TCPDF\TCPDF();
        //$pdf->writeHTML(view('pages.admin.reports.icf_report' , ['info' => $info]) , );
    }
}
