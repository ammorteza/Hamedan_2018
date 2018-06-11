<?php

namespace Hamedan_2018\Http\Controllers;

use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class RegisterController extends Controller
{
    public function registerForm(Request $request)
    {

        //echo $this->generateUuid();
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
