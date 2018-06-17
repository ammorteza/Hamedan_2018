<?php

namespace Hamedan_2018\Http\Controllers;

use Hamedan_2018\Form;
use Hamedan_2018\FormAnswer;
use Hamedan_2018\QuestionForm;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class RegisterController extends Controller
{
    public function registerForm(Request $request , $fId)
    {
        $questionForm = QuestionForm::where('qfState' , '=' , 1)->where('qfFrId' , '=' , $fId)->get();
        $uuId = $this->generateUuid();
        foreach ($questionForm as $qForm)
        {
            if (!empty($request->get($qForm->id)))
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
                    $answer = new FormAnswer;
                    $answer->faValue = $request->get($qForm->id);
                    $answer->faQfId = $qForm->id;
                    $answer->faUuId = $uuId;
                    $answer->save();
                }
            }
        }
        return redirect()->back();
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
