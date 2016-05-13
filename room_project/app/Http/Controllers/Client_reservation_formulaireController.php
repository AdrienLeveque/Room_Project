<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AssuranceRequest;
use App\Http\Requests\ClefRequest;

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
	ClefRequest $request
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
				
				/*$data = array(
					'name'  => 'Raphael',
					'age'   => 18,
					'email' => 'r.mobis@rmobis.com'  */
				//echo Input::get('idSalle');
				return View('client_reservation_paiement');
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
