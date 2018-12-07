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

}
