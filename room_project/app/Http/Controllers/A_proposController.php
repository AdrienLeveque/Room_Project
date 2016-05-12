<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class A_proposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		//$adrien = DB::table('horaire')->where('jour','vendredi')->value('date_debut');
        return view('a_propos');
    }

}
