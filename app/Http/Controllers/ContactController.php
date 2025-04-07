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

        $message = $validated['message'];

        Mail::to($validated['email'])->send(
            new \App\Mail\ContactReply($validated)
        );

        return back()->with('success', 'Mesajul dumneavoastră a fost trimis cu succes!');
    }
}