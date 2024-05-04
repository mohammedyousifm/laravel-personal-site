<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Exception;
use App\Mail\ContactMail;

class contactController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $details = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required'
        ]);

        try {
            // Attempt to send the email
            Mail::to('contact@mohammedyousif.com')->send(new ContactMail($details));
            return response()->json(['success' => true, 'message' => 'تم إرسال رسالتك بنجاح!']);
        } catch (Exception $e) {
            return response()->json(['success' => false, 'message' => 'لم يتم إرسال رسالتك بنجاح!'], 500);
        }
    }
}
