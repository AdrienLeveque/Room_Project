<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class CommentCaMarcheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$adrien = DB::table('horaire')->where('jour','vendredi')->value('date_debut');
        return view('comment_ca_marche');
    }

}
