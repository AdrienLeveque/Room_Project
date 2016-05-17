<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Employer_etat_des_lieuxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
               return view('employe/employe_etat_des_lieux');
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

        // Salle abimé
        $idSalle = $request->input('idSalle');
        $salleAbimee = $request->input('Salle_abime'.$idSalle);

        // materiel abimé
        $idMateriel = $request->input('idMateriel');
        $materiel = array();

        if(!empty($idMateriel)){
        for ( $k = 0 ; $k <= $idMateriel ; $k++){
            $materiel[] = $request->input('materiel_abime'.$k);
        }
        }
        else{
            $materiel[] = 'aucun';
        }


        // clef empruntée
        $idClef = $request->input('idClef');
        if(empty($idClef))
        {
            $clefEmpruntee = "La clef n'a pas été empruntée";
        }
        else
        {
        $clefEmpruntee = $request->input('clef_empruntee'.$idClef);
        }

        //id USer
        $idUser= $request->input('idUser');

        //id Reservation
        $idReservation = $request->input('idReservation');
        return view('employe/employe_etat_des_lieux_bilan', compact('idSalle', 'salleAbimee','clefEmpruntee','idMateriel','idClef', 'materiel', 'idUser', 'idReservation'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
             return view('employe/employe_agenda');
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
