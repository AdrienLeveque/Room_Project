<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/


Route::get('client_mon_compte','Client_mon_compteController@index');
Route::get('client_mes_reservations','Client_mes_reservationsController@index');

Route::get('client_reservation_paiement','Client_reservation_paiementController@index');
Route::post('client_reservation_paiement','Client_reservation_paiementController@postForm');

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


// Authentification et Inscription
Route::auth();

// Home
Route::get('/', [
	'uses' => 'AccueilController@index', 
	'as' => 'home'
]);

Route::get('/toto', function(){
	return view('connexion');
});

// Admin
	Route::get('admin', [
		'uses' => 'AdminController@index',
		'as' => 'admin',
		'middleware' => 'admin'
]);


Route::post('admin_employer', [
		'uses' => 'Admin_employerController@postForm',
		'as' => 'admin',
		'middleware' => 'admin'
]);

Route::get('admin_employer', [
		'uses' => 'Admin_employerController@index',
		'as' => 'admin',
		'middleware' => 'admin'
]);

Route::get('admin_accueil', [
		'uses' => 'Admin_accueilController@index',
		'as' => 'admin',
		'middleware' => 'admin'
]);

Route::get('admin_salle_delete', [
		'uses' => 'Admin_salle_deleteController@index',
		'as' => 'admin',
		'middleware' => 'admin'
]);

Route::post('admin_salle_delete', [
		'uses' => 'Admin_salle_deleteController@postForm',
		'as' => 'admin',
		'middleware' => 'admin'
]);

Route::get('admin_salle', [
		'uses' => 'Admin_salleController@index',
		'as' => 'admin',
		'middleware' => 'admin'
]);

Route::post('admin_salle', [
		'uses' => 'Admin_salleController@postForm',
		'as' => 'admin',
		'middleware' => 'admin'
]);

// Employe
Route::get('etat_des_lieux', [
	'uses' => 'Employer_etat_des_lieuxController@index',
	'as' => 'employe',
	'middleware' => 'employe'
]);
Route::post('employe_etat_des_lieux', [
	'uses' => 'Employer_etat_des_lieuxController@store',
	'as' => 'employe',
	'middleware' => 'employe'
]);
Route::get('agenda', [
	'uses' => 'Employer_etat_des_lieuxController@show',
	'as' => 'employe',
	'middleware' => 'employe'
]);