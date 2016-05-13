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

Route::get('client_reservation_paiement','Client_reservation_paiementController@index');
Route::get('client_consulter_salles', 'Client_consulter_sallesController@index');
Route::get('client_reservation_formulaire', 'Client_reservation_formulaireController@index');
Route::post('client_reservation_formulaire', 'Client_reservation_formulaireController@postForm');
Route::get('client_reservation_salles', 'Client_reservation_sallesController@index');
Route::get('client_reservation', 'Client_reservationController@index');
Route::get('client_compte', 'Client_compteController@index');
Route::get('client_contact', 'Client_contactController@index');
Route::get('client_accueil', 'Client_accueilController@index');

Route::get('/a_propos', 'A_proposController@index');
Route::get('/accueil', 'AccueilController@index');

Route::get('contact', 'ContactController@getForm');
Route::post('contact', 'ContactController@postForm');



Route::auth();

Route::get('/', function () {
    return view('accueil');
});

