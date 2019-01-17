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

/*  IN DEZE FILE WORDEN ROUTES AANGEMAAKT EN WORDEN DE BLADE FILES GEKOPPELD AAN DE JUISTE CONTROLLERS   */

Route::get('/', function () {
    return view('homepage');
})
->name('homepage');



Route::get('/opleidingen', function () {
    return view('opleidingen');
});


Route::get('/oefeningen', 'PracticeController@showPage')
->name('oefeningen');


Route::get('/schemas', 'PracticeController@showPageSchemas')
    ->name('schemas');

Route::get('/joudoel', 'PracticeController@showPageJoudoel')
    ->name('joudoel');

Route::get('/vragen', 'PracticeController@showPageVragen')
    ->name('vragen');

Route::get('/voeding', 'PracticeController@showPageVoeding')
    ->name('voeding');

Route::get('/suplementen', 'PracticeController@showPageSuplementen')
    ->name('suplementen');

Route::get('/contact', 'PracticeController@showPageContact')
    ->name('contact');

Route::get('/registratie',	'FormController@showForm')
    ->name ('registration');

Route::post('/registratie',	'FormController@handleForm')
    ->name ('registration.form.handle');

Route::post('/registratie/bevestiging',	'FormController@confirmationPage')
    ->name ('registration.confirmation');

Route::get('/test', 'CMSController@index');

Route::get('/test/Exercise', 'ExerciseController@test');

Route::get('/photo-gallery', 'PhotoGalleryController@listPhotos')->name('gallery.index');

Route::get('/photo-gallery/add-photo', 'PhotoGalleryController@showPhotoForm')->name('gallery.add_photo');
Route::post('/photo-gallery/add-photo', 'PhotoGalleryController@savePhotoForm')->name('gallery.save_photo');



