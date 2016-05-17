<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Client_mon_compteController extends Controller
{
     public function index()
    {
        return view('client/client_mon_compte');
    }
}