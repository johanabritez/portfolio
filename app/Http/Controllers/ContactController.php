<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailReceived;

class ContactController extends Controller
{
	public function create()
	{
		return view('contact');
	}

    public function store(Request $request)
    {
    	$message = $request->validate
    	([
    		'name' => 'required',
    		'email' => 'required|email',
    		'subject' => 'required',
    		'content' => 'required'
    	]);

    	// envía el objeto $message a la dirección indicada
    	Mail::to('johanabritezf@gmail.com')->queue(new MailReceived($message));

    	return 'Message Sent';
    }
}
