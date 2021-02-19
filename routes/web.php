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
    return view('welcome');
});

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
Route::get('/wascal/register/language/delete/{result}', 'FormController@languagedestroy')->name('delete.language');
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



//Admin section
Auth::routes();
Route::get('/admin', 'AdminController@home')->name('admin.home');
Route::get('/admin/registered', 'AdminController@index')->name('admin.registred');
Route::post('admin/register/store', 'AdminController@store')->name('store.register');
Route::get('/admin/register/{id}', 'AdminController@show')->name('show.register');
Route::get('admin/register/edit/{id}', 'AdminController@edit')->name('edit.register');
Route::post('admin/register/update/{id}', 'AdminController@update')->name('update.register');
Route::get('admin/register/delete/{id}', 'AdminController@destroy')->name('delete.register');

