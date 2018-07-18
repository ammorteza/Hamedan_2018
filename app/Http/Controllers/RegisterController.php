<?php

namespace Hamedan_2018\Http\Controllers;

use Hamedan_2018\Form;
use Hamedan_2018\FormAnswer;
use Hamedan_2018\QuestionForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Ramsey\Uuid\Uuid;

class RegisterController extends Controller
{
    public function registerForm(Request $request , $fId)
    {
        $requireCaptcha = QuestionForm::where('qfFrId' , '=' , $fId)->whereHas('question.fieldType' , function ($q){
            return $q->where('ftType' , '=' , 'captcha');
        })->where('qfState' , '<>' , 0)->get()->count(); //check captcha state is enable

        if ($requireCaptcha != 0)
        {
            $validate = Validator::make(Input::all(), [
                'g-recaptcha-response' => 'required|captcha'
            ]);
            if ($validate->fails())
                return redirect()->back()->withInput()->with('resultError' , ['لطفا فرم را کامل کنید!' , 'please complete form!' , 'يرجى ملء الاستمارة!']);

        }

        $questionForm = QuestionForm::with('question.fieldType')->where('qfState' , '=' , 1)->where('qfFrId' , '=' , $fId)->get();
        if ($this->checkExistUniqueValue($fId , $request))
        {
            return redirect()->back()->withInput()->with('resultError' , ['رکوردی با این مشخصات قبلا ثبت شده است!' , 'duplicate error!' , 'خطأ مكرر!']);
        }else{
            $formInfo = Form::find($fId);
            $uuId = $this->generateUuid();
            foreach ($questionForm as $qForm)
            {
                if ($request->hasFile($qForm->id))
                {
                    foreach ($request->file($qForm->id) as $photo)
                    {
                        $fileName = $photo->store('pic/form_uploaded_img/form_' . $fId . '_' . $formInfo->fEnSubject);
                        $answer = new FormAnswer;
                        $answer->faValue = $fileName;
                        $answer->faQfId = $qForm->id;
                        $answer->faUuId = $uuId;
                        $answer->save();
                    }
                }
                else if (!empty($request->get($qForm->id)))
                {
                    if (is_array($request->get($qForm->id)))
                    {
                        for ($i = 0 ; $i < count($request->get($qForm->id)) ; $i++)
                        {
                            $answer = new FormAnswer;
                            $answer->faValue = $request->get($qForm->id)[$i];
                            $answer->faQfId = $qForm->id;
                            $answer->faUuId = $uuId;
                            $answer->save();
                        }
                    }else{
                        if ($qForm->question->fieldType->ftType == 'phone-number')
                        {
                            $phoneNumber = '+' . $request->get($qForm->id . '_country_code') . '-';
                            $phoneNumber .= $request->get($qForm->id);
                            $answer = new FormAnswer;
                            $answer->faValue = $phoneNumber;
                            $answer->faQfId = $qForm->id;
                            $answer->faUuId = $uuId;
                            $answer->save();
                        }else{
                            $answer = new FormAnswer;
                            $answer->faValue = $request->get($qForm->id);
                            $answer->faQfId = $qForm->id;
                            $answer->faUuId = $uuId;
                            $answer->save();
                        }
                    }
                }
            }
            return redirect()->back()->with('successPm' , [$formInfo->fFaRegisterResult , $formInfo->fEnRegisterResult , $formInfo->fArRegisterResult]);
        }
    }

    private function checkExistUniqueValue($fId , $values)
    {
        $uniqueField = QuestionForm::where('qfState' , '=' , 1)->where('qfFrId' , '=' , $fId)->where('qfUnique' , '=' , 1)->get();
        foreach ($uniqueField as $item) {
            if (!empty($values->get($item->id)))
            {
                return FormAnswer::where('faValue' , '=' , $values->get($item->id))->where('faQfId' , '=' , $item->id)->exists();
            }else{
                return false;
            }
        }
    }

    private function generateUuid()
    {
        $isExist = true;
        while($isExist)
        {
            $uniqueId = Uuid::uuid4();
            if (!\Hamedan_2018\UuId::where('uuUuId' , '=' , $uniqueId)->exists())
            {
                $myUuid = new \Hamedan_2018\UuId();
                $myUuid->uuUuId = $uniqueId;
                $myUuid->save();
                $isExist = false;
            }
        }

        return $myUuid->id;
    }
}
