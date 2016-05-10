<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inscription;
use App\Http\Requests\InscriptionRequest;


class InscriptionController extends Controller
{
    public function getForm()
	{
		return view('inscription');
	}
	public function postForm(
			InscriptionRequest $request,
			Inscription $client) //Maintenant le modèle est injecté dans la méthode
	{
		//$client = new Inscription;
		$client->nom = $request->input('nom');
		$client->prenom = $request->input('prenom');
		$client->email = $request->input('email');
		$client->telephone = $request->input('telephone');
		$client->password = $request->input('password');
		$client->adresse = $request->input('adresse');
		$client->ville = $request->input('ville');
		$client->code_postal = $request->input('code_postal');
		$client->date_naissance = $request->input('jour');
		$client->save();
		
		return view('connexion');
	}

}
