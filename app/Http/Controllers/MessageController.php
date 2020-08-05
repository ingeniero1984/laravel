<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store(Request $request)
    {
    	$message = request()->validate([
    		'name' => 'required',
    		'email' =>'required|email',
    		'subject' => 'required',
    		'content' => 'required|min:3'
    	],[
    		'name.required' => __('I need your name')
    	]);

    	Mail::to(config('mail.mail_contact_address'), config('mail.mail_contact_name'))
            ->send(new MessageReceived($message));

    	return back()->with('toast_success', 'Recibimos tu correo, te responderemos lo más pronto.');
    }
}
