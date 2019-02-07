<?php

use Illuminate\Http\Request;

Route::post('/user/', 'UserController@getUserByName')->name('user.getByName');
Route::get('/artist/', 'ArtistController@index')->name('artist.index');
