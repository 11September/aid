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
    <link rel='stylesheet' id='rs-plugin-settings-css' href='{{ asset('css/settingsf1f1.css') }}' type='text/css'
          media='all'/>

    <style>
        .owl-nav {
            display: none;
        }

        .owl-carousel:hover .owl-nav {
            display: block;
        }

        .carousel-wrap {
            width: 1000px;
            margin: auto;
            position: relative;
        }

        .owl-carousel .owl-nav {
            overflow: hidden;
            height: 0;
        }

        .owl-theme .owl-dots .owl-dot.active span,
        .owl-theme .owl-dots .owl-dot:hover span {
            background: #2caae1;
        }

        .owl-carousel .item {
            text-align: center;
        }

        .owl-carousel .nav-btn {
            height: 47px;
            position: absolute;
            /*width: 26px;*/
            cursor: pointer;
            top: 300px !important;
        }

        .owl-carousel .owl-prev.disabled,
        .owl-carousel .owl-next.disabled {
            pointer-events: none;
            opacity: 0.2;
        }

        .owl-carousel .prev-slide {
            font-size: 40px;
            /*left: -33px;*/
        }

        .owl-carousel .next-slide {
            font-size: 40px;
            right: 0;
        }

        .owl-carousel .prev-slide:hover {
            background-position: 0 -53px;
        }

        .owl-carousel .next-slide:hover {
            background-position: -24px -53px;
        }

        span.img-text {
            text-decoration: none;
            outline: none;
            transition: all 0.4s ease;
            -webkit-transition: all 0.4s ease;
            -moz-transition: all 0.4s ease;
            -o-transition: all 0.4s ease;
            cursor: pointer;
            width: 100%;
            font-size: 23px;
            display: block;
            text-transform: capitalize;
        }

        span.img-text:hover {
            color: #2caae1;
        }
    </style>

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
@endsection

@section('content')
    <div id="hgr_sections">
        <div id="aidspace-maps" class="row standAlonePage">
            <div class="vc_col-md-12 noPadding">

                <div class="container">
                    <div class="slideContent gu12">
                        <section id="about-10" data-vc-full-width="true" data-vc-full-width-init="false"
                                 class="vc_section light-scheme vc_custom_1533043759524">
                            <div
                                class="vc_row wpb_row vc_row-fluid vc_custom_1533102369779 vc_row-has-fill vc_row-o-content-middle vc_row-flex">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div
                                                class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_fadeIn fadeIn">
                                                <div class="wpb_wrapper">
                                                    <h1 style="text-align: center;">AidSpace Maps</h1>

                                                </div>
                                            </div>

                                            <div
                                                class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_fadeIn fadeIn">
                                                <div class="wpb_wrapper">
                                                    <h3 style="text-align: center;">Helps you stay on track with your
                                                        people and their assignment location.</h3>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-vc-full-width="true" data-vc-full-width-init="false"
                                 class="vc_row wpb_row vc_row-fluid vc_custom_1533103106591 vc_row-has-fill">
                                <div
                                    class="wpb_animate_when_almost_visible wpb_fadeIn fadeIn wpb_column vc_column_container vc_col-sm-4">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div
                                                class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1533103297612 vc_row-has-fill">
                                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div
                                                                class="wpb_text_column wpb_content_element  vc_custom_1533042983797">
                                                                <div class="wpb_wrapper">
                                                                    <p style="text-align: center;">This is the tool that
                                                                        helps you stay on track with your people and
                                                                        their assignment location.</p>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="wpb_animate_when_almost_visible wpb_fadeIn fadeIn wpb_column vc_column_container vc_col-sm-4">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div
                                                class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1533103340962 vc_row-has-fill">
                                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div
                                                                class="wpb_single_image wpb_content_element vc_align_center">

                                                                <figure class="wpb_wrapper vc_figure">
                                                                    <div
                                                                        class="vc_single_image-wrapper vc_box_shadow_3d  vc_box_border_grey">
                                                                        <img width="300" height="200"
                                                                             src="{{ asset('images/aidspace-maps-what-is2-300x200.jpg') }}"
                                                                             class="vc_single_image-img attachment-medium"
                                                                             alt=""
                                                                             srcset="{{ asset('images/aidspace-maps-what-is2-300x200.jpg') }}"
                                                                             sizes="(max-width: 300px) 100vw, 300px"/>
                                                                    </div>
                                                                </figure>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="wpb_animate_when_almost_visible wpb_fadeIn fadeIn wpb_column vc_column_container vc_col-sm-4">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div
                                                class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1533103311224 vc_row-has-fill">
                                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div
                                                                class="wpb_text_column wpb_content_element  vc_custom_1533042999064">
                                                                <div class="wpb_wrapper">
                                                                    <p style="text-align: center;">AidSpace maps assists
                                                                        the organization to carry out the development of
                                                                        the humanitarian work and relief in time of
                                                                        crisis.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row-full-width vc_clearfix"></div>
                        </section>
                        <div class="vc_row-full-width vc_clearfix"></div>
                        <section id="services-2" data-vc-full-width="true" data-vc-full-width-init="false"
                                 class="vc_section light-scheme vc_custom_1498831373345 vc_section-has-fill">
                            <div class="vc_row wpb_row vc_row-fluid">
                                <div
                                    class="wpb_animate_when_almost_visible wpb_fadeIn fadeIn wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                    <h2 style="text-align: center;">Main features</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row wpb_row vc_row-fluid vc_custom_1491404342418">
                                <div
                                    class="wpb_animate_when_almost_visible wpb_fadeIn fadeIn wpb_column vc_column_container vc_col-sm-4">
                                    <div class="vc_column-inner vc_custom_1496657017515">
                                        <div class="wpb_wrapper">
                                            <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                <div class="wpb_column vc_column_container vc_col-sm-3">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div class="hgr-icontxt nobg  hgr-onlyicon-5c0797734d3d6 "
                                                                 style=""><i class="icon fa fa-th-list"
                                                                             style=" color:#5da6c0;  font-size:32px!important;  line-height:32px!important; "></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wpb_column vc_column_container vc_col-sm-9">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <h4>Supports the planning of your team’s task
                                                                        locations.</h4>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="wpb_animate_when_almost_visible wpb_fadeIn fadeIn wpb_column vc_column_container vc_col-sm-4">
                                    <div class="vc_column-inner vc_custom_1496657021316">
                                        <div class="wpb_wrapper">
                                            <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                <div class="wpb_column vc_column_container vc_col-sm-3">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div class="hgr-icontxt nobg  hgr-onlyicon-5c0797734d6a0 "
                                                                 style=""><i class="icon fa fa-map-marker"
                                                                             style=" color:#5da6c0;  font-size:32px!important;  line-height:32px!important; "></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wpb_column vc_column_container vc_col-sm-9">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <h4>Keeps an extended record.</h4>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="wpb_animate_when_almost_visible wpb_fadeIn fadeIn wpb_column vc_column_container vc_col-sm-4">
                                    <div class="vc_column-inner vc_custom_1496657025104">
                                        <div class="wpb_wrapper">
                                            <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                <div class="wpb_column vc_column_container vc_col-sm-3">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div class="hgr-icontxt nobg  hgr-onlyicon-5c0797734d989 "
                                                                 style=""><i class="icon fa fa-book"
                                                                             style=" color:#5da6c0;  font-size:32px!important;  line-height:32px!important; "></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wpb_column vc_column_container vc_col-sm-9">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <h4>Provides easy assignment of your volunteers to a
                                                                        specific area.</h4>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div class="vc_row-full-width vc_clearfix"></div>
                        <section data-vc-full-width="true" data-vc-full-width-init="false"
                                 class="vc_section light-scheme vc_custom_1533102962980 vc_section-has-fill">
                            <div class="vc_row wpb_row vc_row-fluid vc_custom_1533044045951 vc_row-has-fill">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div
                                                class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_fadeIn fadeIn">
                                                <div class="wpb_wrapper">
                                                    <h2 style="text-align: center;">How it works</h2>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row wpb_row vc_row-fluid vc_custom_1533043611506 vc_row-has-fill">
                                <div
                                    class="wpb_animate_when_almost_visible wpb_fadeIn fadeIn wpb_column vc_column_container vc_col-sm-4">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div
                                                class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1533103051342 vc_row-has-fill">
                                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div
                                                                class="wpb_text_column wpb_content_element  vc_custom_1533043951933">
                                                                <div class="wpb_wrapper">
                                                                    <p style="text-align: center;">AidSpace Maps
                                                                        currently works with Google Spreadsheets where
                                                                        you keep a record of your team’s activities –
                                                                        who, where and what.</p>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="wpb_animate_when_almost_visible wpb_fadeIn fadeIn wpb_column vc_column_container vc_col-sm-4">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div
                                                class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1533043856619 vc_row-has-fill">
                                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div
                                                                class="wpb_text_column wpb_content_element  vc_custom_1533043976031">
                                                                <div class="wpb_wrapper">
                                                                    <p style="text-align: center;">AidSpace Maps can
                                                                        process this spreadsheet and place all your
                                                                        volunteers on a map with additional information
                                                                        displayed for each person.</p>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="wpb_animate_when_almost_visible wpb_fadeIn fadeIn wpb_column vc_column_container vc_col-sm-4">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div
                                                class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1533103067435 vc_row-has-fill">
                                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div
                                                                class="wpb_text_column wpb_content_element  vc_custom_1533043993950">
                                                                <div class="wpb_wrapper">
                                                                    <p style="text-align: center;">Most importantly –
                                                                        you can embed this map on any other website or
                                                                        share it with anyone. Accessible from <strong>anywhere</strong>
                                                                        at <strong>anytime</strong>.</p>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div class="vc_row-full-width vc_clearfix"></div>
                        <div class="vc_row wpb_row vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div
                                                            class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_fadeIn fadeIn">
                                                            <div class="wpb_wrapper">
                                                                <h2 style="text-align: center;">Screenshots</h2>

                                                            </div>
                                                        </div>
                                                        <div class="wpb_revslider_element wpb_content_element">

                                                            <div id="slider">
                                                                <div class="owl-carousel">
                                                                    <div>
                                                                        <img
                                                                            src="{{ asset('images/Map-full-screen-with-pins.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div>
                                                                        <img src="{{ asset('images/Map-input.png') }}"
                                                                             alt="">
                                                                    </div>
                                                                    <div>
                                                                        <img
                                                                            src="{{ asset('images/Map-with-pins.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div>
                                                                        <img src="{{ asset('images/Maps-embed.png') }}"
                                                                             alt="">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @include('partials.want_know_more')

                            <div class="vc_row-full-width vc_clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="clearfix"></div>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script>
        jQuery(function ($) {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
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
