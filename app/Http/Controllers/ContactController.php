<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Models\ContactMessage;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Create a new ContactMessage instance
        ContactMessage::create($validated);

        Mail::to($validated['email'])->send(
            new \App\Mail\ContactReply($validated)
        );

        return back()->with('success', 'Mesajul dumneavoastră a fost trimis cu succes!');
    }
}