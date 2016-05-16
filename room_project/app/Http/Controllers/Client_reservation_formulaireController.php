<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AssuranceRequest;
use App\Client_reservation_formulaire;
use App\Client_reservation_materiel;
use DB;

class Client_reservation_formulaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('client_reservation_formulaire');
    }

	public function postForm(AssuranceRequest $request,
	Client_reservation_formulaire $reservation,
	Client_reservation_materiel $materiel_reserve
	)
	{
		$pdf = $request->file('Assurance');
		$pdf1 = $request->file('Clef');

		if($pdf->isValid()&&$pdf1->isValid())
		{
			$chemin = config('Assurance.path');

			$extension = $pdf->getClientOriginalExtension();

			do {
				$nom = str_random(10) . '.' . $extension;  //Auth::user()->nom;
				$nom1 = str_random(10) . '.' . $extension;
			} while(file_exists($chemin . '/' . $nom) && file_exists($chemin . '/' . $nom1));

			if($pdf->move($chemin, $nom) && $pdf1->move($chemin, $nom1)) {
				
				$reservation->date_debut = $request->input('date_debut'); 
				$reservation->date_fin = $request->input('date_fin'); ;
				$reservation->etat_des_lieux_effectue = 0;
				$reservation->id_user = $request->input('id_user'); 
				$reservation->id_employe = null;
				$reservation->id_salle_reservation = $request->input('id_salle'); 
				$reservation->valide = 0;
				$reservation->save();
				
				
				$nb_des_materiels=$request->input('nb_des_materiels');
				$id_reservation = DB::table('reservation')
								->select('id')
								->where('id_user','=',$request->input('id_user'))
								->where('id_salle_reservation','=',$request->input('id_salle'))
								->orderBy('id', 'desc')
								->first(); 
				 
				
				$infosMateriel = DB::table('materiel')
											->get(); 
				foreach($infosMateriel as $infosMateriel){
					$libelle_materiel=$infosMateriel->libelle_materiel;
					$unite= $request->input($libelle_materiel);
						for($i = 0; $i <$unite; $i++){
							DB::insert('insert into materiel_reserve(abime, id_reservation, id_materiel) values(?,?,?)', array(0,$id_reservation->id,$infosMateriel->id));			
						}	
				}
				
				//$formData=$request->input('id_salle'); // Request facade
				$url='client_reservation_paiement?id='.$id_reservation->id; 
				return redirect($url);
			}
		}

		//return redirect('inscription')
		//	->with('error','Désolé mais votre image ne peut pas être envoyée !');
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
