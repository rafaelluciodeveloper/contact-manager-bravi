<?php

use Illuminate\Support\Facades\Route;


Route::get('/','PersonController@index')->name('index.person');
Route::get('/add-person','PersonController@addPerson')->name('add.person');
Route::get('/edit-person/{person}','PersonController@editPerson')->name('edit.person');
Route::post('/store-person','PersonController@storePerson')->name('store.person');
Route::put('/update-person/','PersonController@updatePerson')->name('update.person');
Route::delete('/destroy-person/{person}','PersonController@destroyPerson')->name('destroy.person');


Route::get('/add-contact/{person}','ContactController@addContact')->name('add.contact');
Route::get('/view-contact/{person}','ContactController@viewContact')->name('view.contact');
Route::get('/edit-contact/{contact}','ContactController@editContact')->name('edit.contact');
Route::post('/store-contact','ContactController@storeContact')->name('store.contact');
Route::put('/update-contact/','ContactController@updateContact')->name('update.contact');
Route::delete('/destroy-contact/{contact}','ContactController@destroyContact')->name('destroy.contact');
