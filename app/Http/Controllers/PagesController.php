<?php

namespace App\Http\Controllers;

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

        $to = 'info@kitweb.pro';
        $subject = 'Get in touch form aidspace.io';

        $headers= "MIME-Version: 1.0\r\n";
        $headers .= 'From: info@wisp.my' . "\r\n";
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
            <th>name</th>
            <th>email</th>
            <th>subject</th>
            <th>message</th>
            </tr>
            <tr>
            <td>$request->name</td>
            <td>$request->email</td>
            <td>$request->subject</td>
            <td>$request->message</td>
            </tr>
            </table>
            
            </body>
            </html>
            ";

        if (mail($to, $subject, $message, $headers)){
            return redirect()->back()->with('success','Message sent!');
        }else{
            return redirect()->back()->with('error','Oops! Something went wrong!');
        }


    }

}
