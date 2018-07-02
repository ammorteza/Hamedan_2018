<?php

namespace Hamedan_2018\Http\Controllers;

use Faker\Provider\Uuid;
use Hamedan_2018\ImageGallery;
use Hamedan_2018\Permission;
use Hamedan_2018\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

class GalleryController extends Controller
{
    public function __construct(User $user, Router $router)
    {
        $this->middleware(function ($request, $next) {
            $acions = ['album' ,
                'deleteGalleryImage' ,
                'registerForm' ,
                'register'];

            $actionName = explode('@', Route::getCurrentRoute()->getActionName())[1];
            if (in_array($actionName , $acions))
            {
                if (!Permission::checkPermission('ADMIN_GALLERY'))
                    return abort(404);
            }
            return $next($request);
        });
    }

    function album()
    {
        $gallery = ImageGallery::orderBy('id' , 'DESC')->paginate(21);
        return view('pages.admin.album' , ['gallery' => $gallery]);
    }

    public function deleteGalleryImage($gId)
    {
        $storagePath = Config::get('filesystems.disks.local.root');
        try {
            $imageGallery = ImageGallery::where('id' , '=' , $gId)->first();
            ImageGallery::where('id' , '=' , $gId)->delete();
            @unlink($storagePath . '/' . $imageGallery->gPath);
            return Redirect::to('/admin/album');
        }
        catch (\Illuminate\Database\QueryException $e) {
            if($e->getCode() == "23000"){ //23000 is sql code for integrity constraint violation
                return Redirect::back()->withInput()->withErrors(array('msg' => 'با توجه به وابستگی رکورد ها حذف رکورد مورد نظر امکان پذیر نمی باشد!'));
            }
        }
    }

    function registerForm()
    {
        return view('pages.admin.registerAlbum');
    }

    function register(Request $request)
    {
        $gallery = new ImageGallery;
        if ($request->hasFile('imageFile'))
            $gallery->gPath = $request->imageFile->store('pic/gallery');
        $gallery->gFaPhotographer = $request->photographer_fa;
        $gallery->gEnPhotographer = $request->photographer_en;
        $gallery->gArPhotographer = $request->photographer_ar;
        $gallery->gFaLocation = $request->location_fa;
        $gallery->gEnLocation = $request->location_en;
        $gallery->gArLocation = $request->location_ar;
        $gallery->save();

        return Redirect::to('/admin/album');
    }
}
