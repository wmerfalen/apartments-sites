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

use App\Property\Group as Group;
use App\Property\Entity as PropertyEntity;
use App\Legacy\Property as LegacyProperty;
use App\Property\Template as Template;
use App\Property\Site;
use App\Property\Site\Aliases;

$security = app()->make('App\Property\Crud\SecurityCheck');
if($security->allowed()){
    Route::get('/legacy/create/{property_group}/{legacy_id}',function($groupId,$legacyId){
        $prop = new App\Http\Controllers\Property;
        return $prop->register(Group::findOrFail($groupId),LegacyProperty::findOrFail($legacyId));
    });
}

Route::get('/unit',function(){
    header("Location: /floorplans");
    die();
});

Route::get('/admin','SiteController@tagsAdmin')->middleware('https');
Route::post('/admin','SiteController@tagsLogin')->middleware('https');
Route::post('/tags-logout','SiteController@tagsLogout')->middleware('https');
Route::get('/{page}','SiteController@resolve')->middleware('https');
Route::get('/','SiteController@resolve')->middleware('https');
Route::get('/resident-portal/{page}','SiteController@resolveResident')->middleware('https');
Route::post('/{page}','PostController@handle')->middleware('https');
Route::post('/resident-portal/{page}','PostController@handle')->middleware('https');
