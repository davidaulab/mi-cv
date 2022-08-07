<?php

namespace App\Http\Controllers;

use App\Mail\ContactNotification;
use Illuminate\Http\Request;
use Illuminate\support\facades\Mail;


class ContactController extends Controller
{
    //

    public function create () {

        return view ('contacts.create');
    }

    public function store (Request $request) {
        Mail::to('david.martinez@aulab.es')->send (new ContactNotification($request->email, $request->message));
        return back ()->with ('success', 'Mensaje enviado correctamente');
    }
}
