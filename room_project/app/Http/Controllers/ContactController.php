<?php 

namespace App\Http\Controllers;

use Mail;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller {

    public function index()
	{
		return view('contact');
	}

}