<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Client_mes_reservationsController extends Controller
{
      public function index()
    {
        return view('client/client_mes_reservations');
    }
}
