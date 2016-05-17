<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\Admin_salleRequest;
use App\Admin_salle;

class Admin_salleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/admin_salle');
    }
	
	public function postForm( Admin_salleRequest $request,
	Admin_salle $salle
	) 		
	{
		
		$salle->nom_salle = $request->input('nom_salle'); 
		$salle->numero_salle = $request->input('numero_salle'); 
		$salle->adresse_salle = $request->input('adresse_salle'); 
		$salle->tarif_salle = $request->input('tarif_salle'); 
		$salle->capacite_salle = $request->input('capacite_salle');
		$salle->gardien_salle = $request->input('gardien_salle');
		$salle->caution_salle = $request->input('caution_salle');
		//$salle->image = $request->input('capacite_salle');
		$salle->id_type_salle = $request->input('type_salle');
		$salle->save();
		
		/*$pdf = $request->file('Assurance');

		if($pdf->isValid())
		{
			$chemin = config('Assurance.path');

			$extension = $pdf->getClientOriginalExtension();

			do {
				$nom = str_random(10) . '.' . $extension;  //Auth::user()->nom;
				$nom1 = str_random(10) . '.' . $extension;
			} while(file_exists($chemin . '/' . $nom) && file_exists($chemin . '/' . $nom1));

			if($pdf->move($chemin, $nom)) {
				return view('contact');
			}
		}*/
		
		
		return view('admin/admin_accueil');
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
