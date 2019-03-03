<?php
//Route::get('/login', function () {
//    return view('cms.cms');
//});
// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'KlerenController@homepage')
    ->name('homepagina')
;
Route::get('/kleren', 'CMSController@index')
    ->name('cms')
;
Route::get('/kleren/edit{id}', 'CMSController@edit')
    ->name('edit')
;
Route::get('/kleren/toevoegen', 'CMSController@toevoegen')
    ->name('kledingToevoegen')
;
Route::post('/kleren/toevoegenConfirm/confirm', 'CMSController@handleToevoegen')
    ->name('toevoegenHandle')
;
Route::get('/kleren/toevoegenConfirm', 'CMSController@showToevoegen')
    ->name('toevoegenShow')
;
// Delete function
Route::get('/kleren/delete/{kleren}', 'CMSController@delete')
    ->name('delete')
;
Route::post('/kleren/registeredit/confirm{id}', 'CMSController@handleForm')
    ->name('editConfirm')
;
Route::get('/kleren/registeredit/', 'CMSController@confirmationPage')
    ->name('editShow')
;
Route::get('/kleren/delete{kleren}', 'CMSController@deleteOne')
    ->name('deleteOne')
;