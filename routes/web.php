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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cabelos', 'WorkController@cabelos')->name('cabelos');
Route::post('/adicionar/cabelos', 'WorkController@addCabelos')->name('addcabelos');
Route::get('/listar/cabelos', 'WorkController@listCabelos')->name('listcabelos');
Route::delete('/deletar/cabelos/{id}', 'WorkController@deleteCabelos')->name('deletecabelos');

Route::get('/maquiagens', 'WorkController@maquiagens')->name('maquiagens');
Route::post('/adicionar/maquiagens', 'WorkController@addMaquiagens')->name('addmaquiagens');
Route::get('/listar/maquiagens', 'WorkController@listMaquiagens')->name('listmaquiagens');
Route::delete('/deletar/maquiagens/{id}', 'WorkController@deleteMaquiagens')->name('deletemaquiagens');

Route::get('/manicure', 'WorkController@manicure')->name('manicure');
Route::post('/adicionar/manicure', 'WorkController@addManicure')->name('addmanicure');
Route::get('/listar/manicure', 'WorkController@listManicure')->name('listmanicure');
Route::delete('/deletar/manicure/{id}', 'WorkController@deleteManicure')->name('deletemanicure');

Route::get('/sobrancelhas', 'WorkController@sobrancelhas')->name('sobrancelhas');
Route::post('/adicionar/sobrancelhas', 'WorkController@addSobrancelhas')->name('addsobrancelhas');
Route::get('/listar/sobrancelhas', 'WorkController@listSobrancelhas')->name('listsobrancelhas');
Route::delete('/deletar/sobrancelhas/{id}', 'WorkController@deleteSobrancelhas')->name('deletesobrancelhas');

Route::get('/promocoes', 'PromotionController@index')->name('promocoes');
Route::get('/registrar/promocoes', 'PromotionController@register')->name('registerpromocoes');
Route::post('/promocoes', 'PromotionController@insert')->name('insertpromocoes');
Route::get('/listar/promocoes', 'PromotionController@select')->name('selectpromocoes');
Route::get('/listar/promocoes/{id}', 'PromotionController@selectById')->name('selectidpromocoes');
Route::delete('/promocoes/{id}', 'PromotionController@delete')->name('deletepromocoes');
Route::put('/promocoes/{id}', 'PromotionController@update')->name('updatepromocoes');

Route::get('/dicas', 'TipController@index')->name('dicas');
Route::get('/registrar/dicas', 'TipController@register')->name('registerdicas');
Route::post('/dicas', 'TipController@insert')->name('insertdicas');
Route::get('/listar/dicas', 'TipController@select')->name('selectdicas');
Route::get('/listar/dicas/{id}', 'TipController@selectById')->name('selectiddicas');
Route::delete('/dicas/{id}', 'TipController@delete')->name('deletedicas');
Route::put('/dicas/{id}', 'TipController@update')->name('updatedicas');

Route::get('/profissionais', 'EmployeeController@index')->name('profissionais');
Route::get('/registrar/profissionais', 'EmployeeController@register')->name('registerprofissionais');
Route::post('/profissionais', 'EmployeeController@insert')->name('insertprofissionais');
Route::get('/listar/profissionais', 'EmployeeController@select')->name('selectprofissionais');
Route::get('/listar/profissionais/{id}', 'EmployeeController@selectById')->name('selectidprofissionais');
Route::delete('/profissionais/{id}', 'EmployeeController@delete')->name('deleteprofissionais');
Route::put('/profissionais/{id}', 'EmployeeController@update')->name('updateprofissionais');

Route::get('/editar/pagina/{id}', 'PageController@index');
Route::put('/pagina/{id}', 'PageController@update')->name('updatepage');
