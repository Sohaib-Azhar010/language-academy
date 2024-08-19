<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MyMail;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $email = $request->input('email');
        $firstName = $request->input('first_name');
        $msg = $request->input('msg');
    
        Mail::to($email)->send(new MyMail($msg, $firstName));   
    
        return redirect()->back()->with('success', 'Email sent successfully!');
    }
}


