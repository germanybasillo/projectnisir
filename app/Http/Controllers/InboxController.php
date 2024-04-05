<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactForm; // Import the ContactForm model

class InboxController extends Controller
{
    public function index()
    {
        // Retrieve all messages from the ContactForm model
        $messages = ContactForm::latest()->get();

        // Return the inbox view with the messages data
        return view('auth.inbox', compact('messages'));
    }
}