<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class Admin_employerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin_employer');
    }
	
	 public function postForm(Request $request)
    {
			$type_employe = DB::table('type_employe')->get(); 
			$client = DB::table('users')->get();
			$types=array();
			foreach($type_employe as $type_employe){
				
				$types[]=$type_employe->libelle_type_employe;
			}
			$les_emails=array();
			foreach($client as $client){
				
				$les_emails[]=$client->email;
			}
		
		$employe = $request->input('type_employe');
		$email = $request->input('email');
		$user_email= $les_emails[$email];
		
		$client_id = DB::table('users')
		->where('email','=',$user_email)
		->first();
		
		DB::insert('insert into employe(id_user, id_type_employe) values(?,?)', array($client_id->id,$employe+1));	
		
        return view('admin_accueil');
    }


}
