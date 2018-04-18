<?php


Route::get('/', 'IndexController@index')->name('index');
Route::get('/add', 'IndexController@add')->name('addUser');
Route::get('/oferta', 'IndexController@wyswietl_oferte')->name('wyswietl_oferte');
Route::post('/save', [
    'uses' => 'IndexController@save',
    'as' => 'index.save'
]);


Auth::routes();


Route::get('/o_mnie', 'HomeController@pokazDane')->name('home.o_mnie');
Route::get('/moje_zamowienia', 'HomeController@pokazZamowienia')->name('home.moje_zamowienia');
Route::post('/zmien_haslo', [
    'uses' => 'HomeController@zmien_haslo',
    'as' => 'home.zmien_haslo'
]);

Route::post('/usun', [
    'uses' => 'HomeController@usun',
    'as' => 'home.usun'
    ]);


Route::post('/home_save',[
    'uses' => 'HomeController@save',
        'as' => 'dodaj_zamowienie'
]);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/zalogowany_oferta', 'HomeController@oferta')->name('home.oferta');
Route::get('/zamow', 'HomeController@zamow')->name('home.zamow');
