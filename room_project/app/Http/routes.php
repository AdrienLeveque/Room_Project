<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::resource('user', 'UserController');

Route::get('inscription', 'InscriptionController@getForm');
Route::post('inscription', ['uses' => 'InscriptionController@postForm', 'as' => 'storeEmail']);

Route::get('comment_ca_marche', 'CommentCaMarcheController@index');
Route::get('accueil', 'AccueilController@index');
Route::get('contact', 'ContactController@index');
Route::get('connexion', 'ConnexionController@getFrom');
Route::post('connexion', 'ConnexionController@postForm');
