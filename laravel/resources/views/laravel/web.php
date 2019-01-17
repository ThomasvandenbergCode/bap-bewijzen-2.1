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






Route::get('/data', function() {
    $data = array('John', 'Maria', 'Thomas', 'Rick', 'Daan');
    return $data;
});



// d = digit nummer, dus een getal, en + betekend  minimaal of meer getallen moeten er staan
Route::get('/artikel-op-nummer/nummer-{nummer}', 'ArticleController@showArticle')
    ->where('nummer', '\d+')
    ->name('artikel.opnummer')
    ;



Route::get('/artikel/{naam}/{leeftijd}', function ($naam, $leeftijd)  {
    return "ARTIKEL NAAM " .  $naam. " LEEFTIJD = " . $leeftijd ;
})
    ->where('naam', '[a-zA-Z\-]+')
    ->where('leeftijd', '\d+')
    ->name('artikel.opnaam')
    ;



