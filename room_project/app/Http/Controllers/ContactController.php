<?php 

namespace App\Http\Controllers;

use Mail;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller 
{

    public function getForm()
    {
		return view('contact');
	}

	public function postForm(ContactRequest $request)
	{
		Mail::send('email_contact', $request->all(), function($message) 
		{
			$message->to('roomprojectgla@gmail.com')->subject('Contact');
		});

		return view('confirm_email_envoye');
	}

}