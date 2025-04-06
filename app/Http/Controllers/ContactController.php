<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Example: Send an email (you can customize this as needed)
        Mail::raw($validated['message'], function ($message) use ($validated) {
            $message->to('admin@example.com')
                    ->subject($validated['subject'])
                    ->from($validated['email']);
        });

        return back()->with('success', 'Mesajul dumneavoastră a fost trimis cu succes!');
    }
}