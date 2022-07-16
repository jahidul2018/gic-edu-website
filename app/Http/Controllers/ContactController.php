<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

use Session;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'first_name'    => 'required',
            'last_name'     => 'required',
            'email'         => 'required',
            'phone'         => 'required',
            'message'       => 'required',
        ]);

        $contact                = new Contact();
        $contact->first_name    = $request->first_name;
        $contact->last_name     = $request->last_name;
        $contact->email         = $request->email;
        $contact->phone         = $request->phone;
        $contact->message       = $request->message;
        $contact->save();

        Session::flash('success_message',"Thanks for your response. We will get back to you soon!");
        return back();
    }
}
