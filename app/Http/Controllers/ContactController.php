<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'budget' => 'required|string',
            'message' => 'required|string|max:5000',
        ]);

        try {
            // Send email
            Mail::to('fadhilroshan22@gmail.com')->send(new ContactFormMail($validated));

            return back()->with('success', 'Thank you! Your message has been sent successfully.');
        } catch (\Exception $e) {
            return back()->with('error', 'Sorry, there was an error sending your message. Please try again.');
        }
    }
}