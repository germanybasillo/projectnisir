<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('auth.contact');
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|{{ auth()->user()->name }}',
            'email' => 'required|{{ auth()->user()->email }}',
            'subject' => 'required|string|max:5',
            'message' => 'required|string|max:250',
        ]);

        // Send email using Laravel's built-in Mail facade
        Mail::to('support@zehagithub.com')->send(new \App\Mail\ContactForm($request->all()));

        return redirect('/contact')->with('success', 'Message sent successfully!');
    }
}
