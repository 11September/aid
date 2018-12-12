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
                <div class="col-md-4 offset-md-4">
                    <div class="contacts-page-wrapper-form">
                        <form>
                            <div class="form-group">
                                <label for="email">Your Email (required)</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="name">Your name</label>
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input type="text" class="form-control" id="subject">
                            </div>
                            <div class="form-group">
                                <label for="message">Your message (required)</label>
                                <textarea class="form-control" id="message" rows="10" cols="40"></textarea>
                            </div>

                            <input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit sign-up-button">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
