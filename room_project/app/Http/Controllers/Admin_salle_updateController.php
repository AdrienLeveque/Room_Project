<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Admin_salle;
use App\Http\Requests;

class Admin_salle_updateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		
        return view('admin_salle_update');
    }

	 public function postForm(Request $request, Admin_salle $salle)
    {
		$nom_salle = $request->input('nom_salle');
		$infosSalle = DB::table('salle')->get(); 
		$les_salles=array();
		foreach($infosSalle as $infosSalle){
			
			$les_salles[]=$infosSalle->nom_salle;
		}
					
		
		//$info_salle->delete();
		DB::Delete('delete from salle where nom_salle=:nom', ['nom' => $les_salles[$nom_salle]]);	
		if(empty($nom_salle)){
			return view('admin_accueil');
		}else{
			return view('admin_salle');
		}
        
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
