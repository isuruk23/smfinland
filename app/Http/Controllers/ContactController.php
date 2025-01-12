<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendMail(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'contactno' => 'required|string|max:20',
            'country' => 'required|string|max:255',
            'arrival' => 'required|date',
            'departure' => 'required|date',
            'adults' => 'required|integer',
            'child' => 'nullable|integer',
            'infant' => 'nullable|integer',
            'message' => 'required|string',
        ]);

        try {
            // Prepare email data
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'contactno' => $request->contactno,
                'country' => $request->country,
                'arrival' => $request->arrival,
                'departure' => $request->departure,
                'adults' => $request->adults,
                'child' => $request->child,
                'infant' => $request->infant,
                'message' => $request->message,
            ];

            // Send email
            Mail::send('emails.contact', $data, function ($message) use ($data) {
                $message->to('info@simpliflysrilanka.com') // Replace with your email address
                    ->subject('New Contact Request from ' . $data['name']);
                $message->from($data['email'], $data['name']);
            });


            return redirect()->back()->with('success', 'Your message has been sent successfully!');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to send the email. Please try again later.');
        }
    }
}
