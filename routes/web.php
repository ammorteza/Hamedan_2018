<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');
Route::get('/page/{slug}', [
    'uses' => 'PageController@getPage'
])->where('slug', '([A-Za-z0-9\-\/]+)');

Route::prefix('fa')->group(function () {
    Route::get('/', 'HomeController@index_fa');

    Route::get('page/{slug}', [
        'uses' => 'PageController@getPage_fa'
    ])->where('slug', '([A-Za-z0-9\-\/]+)');
});

Route::prefix('ar')->group(function () {
    Route::get('/', 'HomeController@index_ar');

    Route::get('page/{slug}', [
        'uses' => 'PageController@getPage_ar'
    ])->where('slug', '([A-Za-z0-9\-\/]+)');
});

Route::get('/news/', 'NewsController@index');
Route::get('/fa/news/', 'NewsController@index_fa');
Route::get('/ar/news/', 'NewsController@index_ar');

Route::get('/news/info/{nId}', 'NewsController@newsInfo');
Route::get('/fa/news/info/{nId}', 'NewsController@newsInfo_fa');
Route::get('/ar/news/info/{nId}', 'NewsController@newsInfo_ar');

/*Route::get('{pageId}/page/{slug}', [
/*Route::get('{pageId}/page/{slug}', [
    'uses' => 'PageController@getPageWithId'
])->where('slug', '([A-Za-z0-9\-\/]+)');*/

Route::group(['middleware' => ['auth']] , function () {
    Route::get('/admin', 'NewsAdminController@index');
    Route::get('/admin/signOut', 'AuthController@signOut');
    Route::get('/admin/album', 'GalleryController@album');
    Route::get('/admin/album/delete/{gId}', 'GalleryController@deleteGalleryImage');
    Route::get('/admin/album/register', 'GalleryController@registerForm');
    Route::post('/admin/album/register', 'GalleryController@register');
    Route::get('/admin/news', 'NewsAdminController@news');
    Route::get('/admin/news/register', 'NewsAdminController@registerForm');
    Route::post('/admin/news/register', 'NewsAdminController@register');
    Route::get('/admin/news/update/{nId}', 'NewsAdminController@updateForm');
    Route::post('/admin/news/update/{nId}', 'NewsAdminController@update');
    Route::get('/admin/news/slider', 'NewsAdminController@newsSlider');
    Route::get('/admin/news/slider/register', 'NewsAdminController@registerNewsSliderForm');
    Route::post('/admin/news/slider/register', 'NewsAdminController@registerNewsSlider');
    Route::get('/admin/news/slider/delete/{nsId}', 'NewsAdminController@deleteNewsSlider');
    Route::get('/admin/news/delete/{nId}', 'NewsAdminController@delete');
    Route::get('/admin/news/changeState/{nId}/{state}', 'NewsAdminController@changeDisplayState');
    /////////////////////////////////////////////////
    Route::get('/admin/form/{fId}', 'FormAdminController@form');
    Route::get('/admin/form/{fId}/report/{uuId}', 'FormAdminController@report');
});

Route::get('/admin/login', 'AuthController@loginFrom');
Route::post('/admin/signIn', 'AuthController@signIn');
Route::post('/register-form/{fId}' , 'RegisterController@registerForm');


