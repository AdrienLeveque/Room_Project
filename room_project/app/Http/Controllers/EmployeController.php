<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class EmployeController extends Controller {


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('employe');
    }
}