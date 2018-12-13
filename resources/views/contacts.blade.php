@extends('layouts.master')

@section('meta')
    <title>AidSpace - Volunteer management for organisations</title>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="AidSpace - Volunteer management for organisations"/>
    <meta property="og:description"
          content="Helping organisations around the world managing their volunteers, communication and work schedules."/>
    <meta property="og:url" content="https://aidspace.io/contact-us/"/>
    <meta property="og:site_name" content="AidSpace"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="AidSpace - Volunteer management for organisations"/>
    <meta name="twitter:description"
          content="Helping organisations around the world managing their volunteers, communication and work schedules."/>
    <meta name="twitter:image" content="{{ asset('images/logo-new-website-retina.png') }}"/>
@endsection

@section('css')

@endsection

@section('content')
    <section class="contacts-page">
        <div class="container">
            <h2>Get in touch now</h2>
            <div class="row">
                <div class="col-lg-4 offset-lg-4 col-md-6 offset-md-3 col-sm-12">
                    <div class="contacts-page-wrapper-form">


                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif


                        @if ($message = Session::get('error'))
                            <div class="alert alert-danger alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif

                        <form action="{{ action('PagesController@email') }}" method="post">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="email">Your Email (required)</label>
                                <input name="email" type="email" class="form-control" id="email" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Your name</label>
                                <input name="name" type="text" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input name="subject" type="text" class="form-control" id="subject">
                            </div>
                            <div class="form-group">
                                <label for="message">Your message (required)</label>
                                <textarea name="message" class="form-control" id="message" rows="10" cols="40" required></textarea>
                            </div>

                            <input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit sign-up-button">
                        </form>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
