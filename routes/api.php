<?php



Route::get('clans','PagesController@home');
Route::get('clan/{clan}','ClansController@show');