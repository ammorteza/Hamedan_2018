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
Route::get('/', function () {
    return view('pages.section');
});

Route::get('/page/{slug}', [
    'uses' => 'PageController@getPage'
])->where('slug', '([A-Za-z0-9\-\/]+)');

Route::get('{pageId}/page/{slug}', [
    'uses' => 'PageController@getPageWithId'
])->where('slug', '([A-Za-z0-9\-\/]+)');


