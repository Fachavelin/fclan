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

//Route::get('/','PagesController@home');
Route::get('/','PagesController@spa');
Route::get('publicacion/{clan}','ClansController@show')->name('clans.show');
Route::get('juegos/{juego}','JuegosController@show')->name('juegos.show');
Route::get('pais/{pais}','PaisController@show')->name('pais.show');
Route::get('/home','admin\AdminController@index');
Route::group([
    'prefix' => 'admin',
    'namespace' => 'admin',
     'middleware' => 'auth'], 
     function () {
    Route::get('/','AdminController@index')->name('admin');
    //Rutas Clanes
    Route::resource('clans','ClansController',['except'=>'show','as'=>'admin']);
    //Rutas Usuarios
    Route::resource('users','UsersController',['as'=>'admin']);
    //Rutas Fotos
    Route::post('clanes/{clan}/photos','PhotosController@store')->name('clan.photos.store');
    Route::delete('photos/{photo}','PhotosController@destroy')->name('clan.photos.destroy');
   
});
//Rutas Autenticacion 
Route::auth();
//Rutas Social Network Intration
Route::get('login/facebook','SocialLoginController@redirectToFacebook')->name('login.facebook');
Route::get('login/facebook/callback','SocialLoginController@handleFacebookCallback');