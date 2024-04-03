<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactForm;

class ContactFormController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        $contactForm = new ContactForm;
        $contactForm->name = $request->name;
        $contactForm->email = $request->email;
        $contactForm->subject = $request->subject;
        $contactForm->message = $request->message;
        $contactForm->save();

        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}