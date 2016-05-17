<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;

class Client_reservation_sallesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
               return view('client/client_reservation_salles');
    }

	public function postForm(Request $request,
	Client_reservation_salles $reservation){
		
				//$reservation->date_debut = date("Y-m-d");
				//$reservation->date_fin = date("Y-m-d");
				$reservation->etat_des_lieux_effectue = 0;
				$reservation->id_user = Auth::user()->id;//$request->input('id_user'); 
				$reservation->id_employe = null;
				$reservation->id_salle_reservation = $request->input('id_salle'); 
				$reservation->save();
		
		
		$idSalle=$request->input('id_salle');
		$url='client_reservation_formulaire?id='.$idSalle;
		
		return redirect($url);
	}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
