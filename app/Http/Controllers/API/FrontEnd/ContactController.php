<?php

namespace App\Http\Controllers\API\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function submitContactForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'type' => 'required|in:individual,agent,investor',
            'country_code' => 'required|string|max:10',
            'phone' => 'required|string|max:20',
            'message' => 'required|string',
        ]);

        $data = $request->only('name', 'email', 'type', 'country_code', 'phone', 'message');

        try {
            Mail::to('contactus@tashialeon.com')->send(new ContactMail($data));
            return response()->json(['message' => 'Your message has been sent!'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to send message.'], 500);
        }
    }
}
