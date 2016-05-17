<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Validator;
use App\Http\Requests\AssuranceRequest;
use App\Http\Requests\PaiementRequest;
use DB;

class Client_reservation_paiementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('client/client_reservation_paiement');
    }

	public function postForm( PaiementRequest $request
	) 		
	{
		
		$id_reservation = DB::table('banque')
						->where('annee','=',$request->input('annee'))
						->where('mois','=',$request->input('mois'))
						->where('code_verification','=',$request->input('code_verification'))
						->where('numero_carte','=',$request->input('numero_carte'))
						->where('type_carte','=',$request->input('type_carte'))
						->count(); 
					 
		if($id_reservation==0){
			return view('client/paiementPasOK');
		}else{
			$reservation = DB::table('reservation')
						->where('id','=',$request->input('id_reservation'))
						->update(['valide' => true]);
						
			return view('client/paiementOK');
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
    public function store(PaiementRequest $request)
    {
        $validator = Validator::make($request->all(), [
		'type_carte' => 'required|alpha',
		'numero_carte' => 'required|size:16|alpha_num',
		'cryptogramme' => 'required|max:255|alpha_num'
		]);
		
		if( $validator->fails()){
			return redirect('post/create')
			->withErros($validator)
			->withInput();
		}
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
