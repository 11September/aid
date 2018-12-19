<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function roadmap()
    {
        return view('roadmap');
    }

    public function faq()
    {
        return view('faq');
    }

    public function how_it_works()
    {
        return view('how_it_works');
    }

    public function contacts()
    {
        return view('contacts');
    }

    public function about()
    {
        return view('about');
    }

    public function sustainable_development()
    {
        return view('sustainable_development');
    }

    public function aidspace_people()
    {
        return view('aidspace_people');
    }

    public function aidspace_maps()
    {
        return view('aidspace_maps');
    }

    public function legal()
    {
        return view('legal');
    }

    public function terms_of_service()
    {
        return view('terms_of_service');
    }

    public function cookie_policy()
    {
        return view('cookie_policy');
    }

    public function privacy_policy()
    {
        return view('privacy_policy');
    }

    public function gdpr()
    {
        return view('gdpr');
    }

    public function email(Request $request)
    {
        $request->validate([
            'email' => 'required|max:255',
            'message' => 'required|max:255',
            'name' => 'max:255',
            'subject' => 'max:255',
        ]);

        $message = $request->all();

        \Mail::send(new SendEmail($message));

        if (count(\Mail::failures()) > 0) {
            return redirect()->back()->with('error', 'Oops! Something went wrong!');
        } else {
            return redirect()->back()->with('success', 'Message sent!');
        }
    }

    public function OldEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|max:255',
            'message' => 'required|max:255',
            'name' => 'max:255',
            'subject' => 'max:255',
        ]);

        $to = 'info@aidspace.io';
        $subject = 'Get in touch form aidspace.io site!';

        $headers = "MIME-Version: 1.0\r\n";
        $headers .= 'From: noreply@aidspace.io' . "\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n";

        $message = "
            <html>
            <head>
            <title>HTML email</title>
            </head>
            <body>
            <p>New Application from aidspace.io!</p>
            
            <table style='width: 100%;'>
                <tr>
                    <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Name:</b></td>
                    <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Email:</b></td>
                    <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Subject:</b></td>
                    <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Message:</b></td>
                </tr>
                <tr>
                    <td style='padding: 10px; border: #e9e9e9 1px solid;'>$request->name</td>
                    <td style='padding: 10px; border: #e9e9e9 1px solid;'>$request->email</td>
                    <td style='padding: 10px; border: #e9e9e9 1px solid;'>$request->subject</td>
                    <td style='padding: 10px; border: #e9e9e9 1px solid;'>$request->message</td>
                </tr>
            </table>
            
            </body>
            </html>
            ";

        if (mail($to, $subject, $message, $headers)) {
            return redirect()->back()->with('success', 'Message sent!');
        } else {
            return redirect()->back()->with('error', 'Oops! Something went wrong!');
        }
    }

}
