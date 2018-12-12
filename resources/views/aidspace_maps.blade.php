@extends('layouts.master')

@section('meta')
    <title>AidSpace Maps - AidSpace</title>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="AidSpace Maps - AidSpace"/>
    <meta property="og:description"
          content="Helping organisations around the world managing their volunteers, communication and work schedules."/>
    <meta property="og:url" content="https://aidspace.io/aidspace-maps/"/>
    <meta property="og:site_name" content="AidSpace"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="AidSpace Maps - AidSpace"/>
    <meta name="twitter:description"
          content="Helping organisations around the world managing their volunteers, communication and work schedules."/>
    <meta name="twitter:image" content="{{ asset('images/logo-new-website-retina.png') }}"/>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
@endsection

@section('content')
    <section id="aidSpace-maps" class="wow fadeIn roadmap">
        <div class="intro-flex">
            <h1>AidSpace Maps</h1>
            <h3>Helps you stay on track with your people and their assignment location.</h3>
        </div>
    </section>

    <section class="aidSpace-people-how-it-works">
        <div class="container">
            <div class="wrapper-how-it-works-blocks">
                <div class="row">
                    <div class="col-md-4">
                        <div class="how-it-works-block">
                            <p>This is the tool that helps you stay on track with your people and their assignment
                                location.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="how-it-works-blocks-image-wrapper">
                            <div class="image tabcontent-content vc_box_shadow_3d box_shadow">
                                <img width="300" height="200"
                                     src="https://aidspace.io/wp-content/uploads/2018/07/aidspace-maps-what-is2-300x200.jpg"
                                     class="vc_single_image-img attachment-medium" alt=""
                                     srcset="https://aidspace.io/wp-content/uploads/2018/07/aidspace-maps-what-is2-300x200.jpg 300w, https://aidspace.io/wp-content/uploads/2018/07/aidspace-maps-what-is2-768x512.jpg 768w, https://aidspace.io/wp-content/uploads/2018/07/aidspace-maps-what-is2-1024x683.jpg 1024w, https://aidspace.io/wp-content/uploads/2018/07/aidspace-maps-what-is2-600x400.jpg 600w"
                                     sizes="(max-width: 300px) 100vw, 300px">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="how-it-works-block">
                            <p>AidSpace maps assists the organization to carry out the development of the humanitarian
                                work and relief in time of crisis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="aidSpace-people-main-features">
        <div class="container">
            <h2>Main features</h2>

            <div class="aidSpace-people-main-features-block-wrapper">
                <div class="row">
                    <div class="col-md-4">
                        <div class="aidSpace-people-main-features-item">
                            <div class="aidSpace-people-main-features-item-image">
                                <i class="icon fa fa-th-list"></i>
                            </div>
                            <div class="aidSpace-people-main-features-item-content">
                                <h4>Supports The Planning Of Your Team’s Task Locations.</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="aidSpace-people-main-features-item">
                            <div class="aidSpace-people-main-features-item-image">
                                <i class="icon fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <div class="aidSpace-people-main-features-item-content">
                                <h4>Keeps An Extended Record.</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="aidSpace-people-main-features-item">
                            <div class="aidSpace-people-main-features-item-image">
                                <i class="icon fa fa-book" aria-hidden="true"></i>
                            </div>
                            <div class="aidSpace-people-main-features-item-content">
                                <h4>Provides Easy Assignment Of Your Volunteers To A Specific Area.</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="aidSpace-maps-how-it-works" class="aidSpace-people-subintro-texts">
        <div class="container">
            <h2>How it works</h2>

            <div class="row">
                <div class="col-md-4">
                    <div class="aidSpace-people-subintro">
                        <p>AidSpace Maps currently works with Google Spreadsheets where you keep a record of your team’s
                            activities – who, where and what.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="aidSpace-people-subintro">
                        <p>AidSpace Maps can process this spreadsheet and place all your volunteers on a map with
                            additional information displayed for each person.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="aidSpace-people-subintro">
                        <p>Most importantly – you can embed this map on any other website or share it with anyone.
                            Accessible from <strong>anywhere</strong> at <strong>anytime</strong>.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="aidSpace-people-slider">
        <div class="container">
            <h2>Screenshots</h2>

            <div id="slider">
                <div class="owl-carousel">
                    <div>
                        <img src="{{ asset('images/Map-full-screen-with-pins.png') }}" alt="">
                    </div>
                    <div>
                        <img src="{{ asset('images/Map-input.png') }}" alt="">
                    </div>
                    <div>
                        <img src="{{ asset('images/Map-with-pins.png') }}" alt="">
                    </div>
                    <div>
                        <img src="{{ asset('images/Maps-embed.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.want_know_more')

@endsection

@section('scripts')
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script>
        jQuery(function ($) {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                dots: false,
                items: 1,
                singleItem: true,
                navigation: true,
                autoHeight: true,
                navText: ["<div class='nav-btn prev-slide'><span class=\"fa-stack\"><i class=\"fa fa-circle fa-stack-1x\"></i><i class=\"fa fa-chevron-circle-left fa-stack-1x fa-inverse\"></i></span></div>", "<div class='nav-btn next-slide'><span class=\"fa-stack\"><i class=\"fa fa-circle fa-stack-1x\"></i><i class=\"fa fa-chevron-circle-right fa-stack-1x fa-inverse\"></i></span></div>"],
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items: 1,
                        nav: true,
                        loop: true
                    }
                }
            });
        });
    </script>
@endsection
