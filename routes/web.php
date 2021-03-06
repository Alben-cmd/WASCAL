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

Route::get('/', 'FormController@passport')->name('home');

Route::get('/wascal/register', 'FormController@passport')->name('passport');
Route::post('/wascal/register/passport', 'FormController@storepassport')->name('store.passport');
Route::get('/wascal/register/step1', 'FormController@createStep1')->name('step1');
Route::post('/wascal/register/step1', 'FormController@postCreateStep1')->name('store.form1');
Route::get('/wascal/register/step2', 'FormController@createStep2')->name('step2');
Route::post('/wascal/register/step2', 'FormController@postCreateStep2')->name('store.form2');
Route::get('/wascal/register/school/delete/{school}', 'FormController@schooldestroy')->name('delete.school');
Route::get('/wascal/register/step2b', 'FormController@createStep2b')->name('step2b');
Route::post('/wascal/register/step2b', 'FormController@postCreateStep2b')->name('store.form2b');
Route::get('/wascal/register/result/delete/{result}', 'FormController@resultdestroy')->name('delete.result');
Route::get('/wascal/register/step3', 'FormController@createStep3')->name('step3');
Route::post('/wascal/register/step3', 'FormController@postCreateStep3')->name('store.form3');
Route::get('/wascal/register/university/delete/{university}', 'FormController@universitydestroy')->name('delete.university');
Route::get('/wascal/register/step3b', 'FormController@createStep3b')->name('step3b');
Route::post('/wascal/register/step3b', 'FormController@postCreateStep3b')->name('store.form3b');
Route::get('/wascal/register/step4', 'FormController@createStep4')->name('step4');
Route::post('/wascal/register/step4', 'FormController@postCreateStep4')->name('store.form4');
Route::get('/wascal/register/language/delete/{language}', 'FormController@languagedestroy')->name('delete.language');
Route::get('/wascal/register/step5', 'FormController@createStep5')->name('step5');
Route::post('/wascal/register/step5', 'FormController@postCreateStep5')->name('store.form5');
Route::get('/wascal/register/computer/delete/{computer}', 'FormController@computerdestroy')->name('delete.computer');
Route::get('/wascal/register/step6', 'FormController@createStep6')->name('step6');
Route::post('/wascal/register/step6', 'FormController@postCreateStep6')->name('store.form6');
Route::get('/wascal/register/employment/delete/{employment}', 'FormController@computerdestroy')->name('delete.employment');
Route::get('/wascal/register/step8', 'FormController@createStep8')->name('step8');
Route::post('/wascal/register/step8', 'FormController@postCreateStep8')->name('store.form8');
Route::get('/wascal/register/referee/delete/{referee}', 'FormController@refereedestroy')->name('delete.referee');
Route::get('/wascal/register/step9', 'FormController@createStep9')->name('step9');
Route::post('/wascal/register/step9', 'FormController@postCreateStep9')->name('store.form9');
Route::get('/wascal/register/document/delete/{documents}', 'FormController@documentdestroy')->name('delete.document');
Route::get('/wascal/register/review', 'FormController@createStep10')->name('step10');
Route::post('/wascal/register/store', 'FormController@store')->name('final.store');

//referee form
Route::get('wascal/referee/form/professional', 'RefereeController@profreferee')->name('profreferee');
Route::post('wascal/form/professional/store', 'RefereeController@postprofreferee')->name('store.profreferee');
Route::get('wascal/referee/form/academic', 'RefereeController@academicreferee')->name('academicreferee');
Route::post('wascal/referee/form/academic', 'RefereeController@postacademicreferee')->name('store.academicreferee');

//referee email
Route::get('wascal/referee/form/professional/email/{ref_id}/{id}', 'RefereeController@profmail')->name('profmail');
Route::get('wascal/referee/form/academic/email/{ref_id}/{id}', 'RefereeController@academicmail')->name('academicmail');


//unique no search
Route::get('wascal/register/uniqidID', 'FormController@uniquesearch')->name('uniquesearch'); 

//print
Route::get('/wascal/register/print','FormController@printpriview')->name('printpriview');

//Admin section
Auth::routes();
Route::get('/admin', 'AdminController@home')->name('admin.home');
Route::get('/admin/registered', 'AdminController@index')->name('admin.registred');
Route::post('admin/register/store', 'AdminController@store')->name('store.register');
Route::get('/admin/register/{id}', 'AdminController@show')->name('show.register');
Route::get('admin/register/edit/{id}', 'AdminController@edit')->name('edit.register');
Route::post('admin/register/update/{id}', 'AdminController@update')->name('update.register');
Route::get('admin/register/delete/{id}', 'AdminController@destroy')->name('delete.register');

//edit
Route::get('admin/register/edit/passport/{id}', 'AdminController@editpassport')->name('edit.passport');
Route::post('admin/register/update/passport/{id}', 'AdminController@updatepassport')->name('update.passport');
Route::get('admin/register/edit/personal/{id}', 'AdminController@editpersonal')->name('edit.personal');
Route::post('admin/register/update/personal/{id}', 'AdminController@updatepersonal')->name('update.personal');
Route::get('admin/register/edit/secondary/{id}', 'AdminController@editsecondary')->name('edit.secondary');
Route::post('admin/register/update/secondary/{id}', 'AdminController@updatesecondary')->name('update.secondary');
Route::get('admin/register/edit/result/{id}', 'AdminController@editresult')->name('edit.result');
Route::post('admin/register/update/result/{id}', 'AdminController@updateresult')->name('update.result');
Route::get('admin/register/edit/university/{id}', 'AdminController@edituniversity')->name('edit.university');
Route::post('admin/register/update/university/{id}', 'AdminController@updateuniversity')->name('update.university');
Route::get('admin/register/edit/first_degree/{id}', 'AdminController@editdegree')->name('edit.degree');
Route::post('admin/register/update/firsr_degree/{id}', 'AdminController@updatedegree')->name('update.degree');
Route::get('admin/register/edit/second_degree/{id}', 'AdminController@editmaster')->name('edit.master');
Route::post('admin/register/update/second_degree/{id}', 'AdminController@updatemaster')->name('update.master');
Route::get('admin/register/edit/language/{id}', 'AdminController@editlanguage')->name('edit.language');
Route::post('admin/register/update/language/{id}', 'AdminController@updatelanguage')->name('update.language');
Route::get('admin/register/edit/computer/{id}', 'AdminController@editcomputer')->name('edit.computer');
Route::post('admin/register/update/computer/{id}', 'AdminController@updatecomputer')->name('update.computer');
Route::get('admin/register/edit/employment/{id}', 'AdminController@editemployment')->name('edit.employment');
Route::post('admin/register/update/employment/{id}', 'AdminController@updateemployment')->name('update.employment');
Route::get('admin/register/edit/referee/{id}', 'AdminController@editreferee')->name('edit.referee');
Route::post('admin/register/update/referee/{id}', 'AdminController@updatereferee')->name('update.referee');

//referee
Route::get('/admin/professional_referee', 'AdminController@profreferee')->name('admin.profreferee');
Route::get('/admin/professional_referee/edit/{id}', 'AdminController@showprofreferee')->name('show.profreferee');

Route::get('/admin/academic_referee', 'AdminController@academicreferee')->name('admin.academicreferee');
Route::get('/admin/academic_referee/edit/{id}', 'AdminController@showacademicreferee')->name('show.academicreferee');



