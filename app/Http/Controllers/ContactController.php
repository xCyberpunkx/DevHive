<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'company' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'nullable|string|max:20',
            'message' => 'nullable|string',
            'agree' => 'accepted',
        ]);

        $data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'company' => $request->company,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'message' => $request->message,
        ];

        // Send email
        try {
            Mail::to('your@example.com')->send(new ContactFormMail($data));

            return redirect()->route('contact.show')->with('success', 'Your message has been sent successfully!');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Failed to send the message. Please try again later.']);
        }
    }
}
