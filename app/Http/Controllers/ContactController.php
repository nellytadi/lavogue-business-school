<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $contact = new Contact();

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;

        $contact->save();

        return redirect()->back()->with(['success' => 'Your message has been sent successfully. We will get back to you as soon as possible.']);
    }
}
