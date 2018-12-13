@extends('layouts.master')

@section('meta')
    <title>AidSpace People - AidSpace</title>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="AidSpace People - AidSpace"/>
    <meta property="og:description"
          content="Helping organisations around the world managing their volunteers, communication and work schedules."/>
    <meta property="og:url" content="https://aidspace.io/aidspace-people/"/>
    <meta property="og:site_name" content="AidSpace"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="AidSpace People - AidSpace"/>
    <meta name="twitter:description"
          content="Helping organisations around the world managing their volunteers, communication and work schedules."/>
    <meta name="twitter:image" content="{{ asset('images/logo-new-website-retina.png') }}"/>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
@endsection

@section('content')

    <section id="aidSpace-people" class="roadmap">
        <div class="intro-flex">
            <h1>AidSpace People</h1>
            <h3 class="wow animated fadeIn delay-1s">People and cases management system</h3>
        </div>
    </section>

    <section class="aidSpace-people-subintro-texts wow animated fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="aidSpace-people-subintro">
                        <p style="text-align: center;">The People tool is placed in the center of your digital suite.
                            Provides everything needed to make people management more simple and productive.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="aidSpace-people-subintro">
                        <p style="text-align: center;">We embedded the easiest configuration options, top level security
                            of data and workflow.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="aidSpace-people-subintro">
                        <p style="text-align: center;">Instead of broken into pieces spreadsheets, or paper files your
                            organisation sets easy access to a complete database of key cases into explicitly to save
                            precious time.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="aidSpace-people-main-features wow animated fadeIn">
        <div class="container">
            <h2>Main features</h2>

            <div class="aidSpace-people-main-features-block-wrapper">
                <div class="row">
                    <div class="col-md-4">
                        <div class="aidSpace-people-main-features-item">
                            <div class="aidSpace-people-main-features-item-image">
                                <i class="icon fa fa-heart"></i>
                            </div>
                            <div class="aidSpace-people-main-features-item-content">
                                <h4>People and cases management system</h4>
                                <p>Stay on top of your planning by easily managing your people and the cases they work
                                    on.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="aidSpace-people-main-features-item">
                            <div class="aidSpace-people-main-features-item-image">
                                <i class="fa fa-users" aria-hidden="true"></i>
                            </div>
                            <div class="aidSpace-people-main-features-item-content">
                                <h4>HR intelligence tool</h4>
                                <p>Keep concentrated and organised HR intelligence data.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="aidSpace-people-main-features-item">
                            <div class="aidSpace-people-main-features-item-image">
                                <i class="fa fa-cogs" aria-hidden="true"></i>
                            </div>
                            <div class="aidSpace-people-main-features-item-content">
                                <h4>Flexibility</h4>
                                <p>Easy to implement as per the organisation’s management requirements.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="aidSpace-people-how-it-works wow animated fadeIn">
        <div class="container">
            <h2>How it works</h2>

            <div class="wrapper-how-it-works-blocks">
                <div class="row">
                    <div class="col-md-4">
                        <div class="how-it-works-block">
                            <p style="text-align: center;">Every volunteer can keep a record of the people that he
                                interacts with and their profile data.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="how-it-works-blocks-image-wrapper">
                            <div class="image tabcontent-content vc_box_shadow_3d box_shadow">
                                <img width="300" height="200"
                                     src="{{ asset('images/AidSpace-volunteers-how-it-works-300x200.jpg') }}"
                                     class="vc_single_image-img attachment-medium" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="how-it-works-block">
                            <p style="text-align: center;">On top of that, you can create cases for each person and
                                track their status, responsible person, final outcome, etc.</p>
                        </div>
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
                        <img src="{{ asset('images/Cases-list.png') }}" alt="">
                    </div>
                    <div>
                        <img src="{{ asset('images/New-case.png') }}" alt="">
                    </div>
                    <div>
                        <img src="{{ asset('images/New-person.png') }}" alt="">
                    </div>
                    <div>
                        <img src="{{ asset('images/People-list.png') }}" alt="">
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
