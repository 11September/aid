@extends('layouts.master')

@section('meta')
    <title>Legal - AidSpace</title>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="Legal - AidSpace"/>
    <meta property="og:description"
          content="Helping organisations around the world managing their volunteers, communication and work schedules."/>
    <meta property="og:url" content="https://aidspace.io/legal/"/>
    <meta property="og:site_name" content="AidSpace"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="Legal - AidSpace"/>
    <meta name="twitter:description"
          content="Helping organisations around the world managing their volunteers, communication and work schedules."/>
    <meta name="twitter:image" content="{{ asset('images/logo-new-website-retina.png') }}"/>
@endsection

@section('css')

@endsection

@section('content')
    <section id="legal" class="terms-of-service">
        <div class="intro-flex">
            <h1>Legal</h1>
            <h3>Read all about our commitment to your data and storage of sensitive information.</h3>
        </div>
    </section>

    <section class="legal-wrapper-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="legal-content-wrapper-item">
                        <div class="legal-content-item">
                            <a href="{{ url('legal/terms-of-service') }}">
                                <div class="wrapper-image">
                                    <img src="{{ asset('images/terms-of-service.png') }}" alt="">
                                </div>
                                <h4>Terms of service</h4>
                                <p>Mutual agreement with all users.</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="legal-content-wrapper-item">
                        <div class="legal-content-item">
                            <a href="{{ url('legal/privacy-policy') }}">
                                <div class="wrapper-image">
                                    <img src="{{ asset('images/Privacy-policy.png') }}" alt="">
                                </div>
                                <h4>Privacy policy</h4>
                                <p>AidSpace commitment to your privacy.</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="legal-content-wrapper-item">
                        <div class="legal-content-item">
                            <a href="{{ url('legal/cookie-policy') }}">
                                <div class="wrapper-image">
                                    <img width="2134" height="2134" src="{{ asset('images/cookie-policy-1.png') }}" alt="">
                                </div>
                                <h4>Cookie policy</h4>
                                <p>Collecting information commitment.</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="legal-content-wrapper-item">
                        <div class="legal-content-item">
                            <a href="{{ url('legal/gdpr') }}">
                                <div class="wrapper-image">
                                    <img src="{{ asset('images/gdpr.png') }}" alt="gdpr compliance">
                                </div>
                                <h4>GDPR</h4>
                                <p>Completely committed to compliance with GDPR.</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')

@endsection
