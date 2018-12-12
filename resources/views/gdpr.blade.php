@extends('layouts.master')

@section('meta')
    <title>GDPR - AidSpace</title>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="GDPR - AidSpace"/>
    <meta property="og:description"
          content="Helping organisations around the world managing their volunteers, communication and work schedules."/>
    <meta property="og:url" content="https://aidspace.io/legal/gdpr/"/>
    <meta property="og:site_name" content="AidSpace"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="GDPR - AidSpace"/>
    <meta name="twitter:description"
          content="Helping organisations around the world managing their volunteers, communication and work schedules."/>
    <meta name="twitter:image" content="{{ asset('images/logo-new-website-retina.png') }}"/>
@endsection

@section('css')

@endsection

@section('content')
    <section class="wow fadeIn terms-of-service">
        <div class="intro-flex">
            <h1>GDPR</h1>
        </div>
    </section>

    <section id="privacy-policy" class="terms-of-service-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>AidSpace is fully GDPR compliant.</p>
                    <p>In here we have enslited all the users&#8217; rights and how we
                        ensure they are upheld properly.</p>
                    <h3>Right to be informed</h3>
                    <ul>
                        <li>Users can read our privacy policy at 
                            <a href="{{ url('legal/privacy-policy') }}">https://aidspace.io/privacy-policy/</a>
                        </li>
                        <li>Users are presented with the privacy policy upon signing up
                            and also while using our application
                        </li>
                    </ul>
                    <p>&nbsp;</p>
                    <h3>Right of access</h3>
                    <ul>
                        <li>Any user can make a request to their organisation for
                            receiving all the data stored on them in AidSpace Volunteers
                        </li>
                        <li>We have provided the necessary features for organisations to
                            export all the data on volunteers (or the whole organisation&#8217;s
                            account) in a machine readable format
                        </li>
                    </ul>
                    <p>&nbsp;</p>
                    <h3>Right of rectification</h3>
                    <ul>
                        <li>AidSpace Volunteers provides the necessary interface for
                            users to rectify all their data by themselves (in some cases
                            some users should request data rectification from their
                            organisation)
                        </li>
                    </ul>
                    <p>&nbsp;</p>
                    <h3>Right to erasure</h3>
                    <ul>
                        <li>AidSpace Volunteers provides a delete feature which erases
                            all personal data on users and users can request from their
                            organisation in case they want their personal data to be
                            erased
                        </li>
                    </ul>
                    <p>&nbsp;</p>
                    <h3>Right to data portability</h3>
                    <ul>
                        <li>The organisation&#8217;s whole account data or individual
                            users&#8217; data can be exported in a machine readable
                            format
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')

@endsection
