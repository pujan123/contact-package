<?php

namespace Test\Contact\Http\Controllers;

use Illuminate\Http\Request;
use Test\Contact\Mail\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Test\Contact\Models\Contact as ContactOne;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {
        Mail::send(new Contact($request));
        ContactOne::create($request->all());
        return redirect()->route('contact');
    }
}
