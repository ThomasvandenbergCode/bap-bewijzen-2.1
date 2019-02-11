<?php


Route::get('/login', function () {
    return view('cms.cms');
});

Route::get('/', 'KlerenController@homepage')

 ->name('homepagina')
;

Route::get('/kleren', 'KlerenController@index')
->name('cms')

;

Route::get('/kleren/edit{id}', 'KlerenController@edit')
 ->name('edit')
;
Route::get('/kleren/toevoegen', 'KlerenController@toevoegen')
    ->name('kledingToevoegen')
;
Route::post('/kleren/toevoegenConfirm/confirm', 'KlerenController@handleToevoegen')
    ->name('toevoegenHandle')
;
Route::get('/kleren/toevoegenConfirm', 'KlerenController@showToevoegen')
    ->name('toevoegenShow')
;
// Delete function
Route::get('/kleren/delete/{kleren}', 'KlerenController@delete')
    ->name('delete')
;



Route::post('/kleren/registeredit/confirm{id}', 'KlerenController@handleForm')
    ->name('editConfirm')
;
Route::get('/kleren/registeredit/', 'KlerenController@confirmationPage')
    ->name('editShow')
;
Route::get('/kleren/delete{kleren}', 'KlerenController@deleteOne')
    ->name('deleteOne')
    ;
