<?php

namespace Hamedan_2018\Http\Controllers;

use Hamedan_2018\ImageGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class NewsAdminController extends Controller
{
    function index()
    {

    }

    function album()
    {
        $gallery = ImageGallery::orderBy('id' , 'DESC')->paginate(20);
        return view('pages/admin/album' , ['gallery' => $gallery]);
    }

    public function deleteGalleryImage($gId)
    {
        try {
            ImageGallery::where('id' , '=' , $gId)->delete();
            return Redirect::back();
        }
        catch (\Illuminate\Database\QueryException $e) {
            if($e->getCode() == "23000"){ //23000 is sql code for integrity constraint violation
                return Redirect::back()->withInput()->withErrors(array('msg' => 'با توجه به وابستگی رکورد ها حذف رکورد مورد نظر امکان پذیر نمی باشد!'));
            }
        }
    }
}
