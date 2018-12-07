@extends('layouts.master')

@section('meta')
    <title>AidSpace - Volunteer management for organisations</title>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="AidSpace - Volunteer management for organisations"/>
    <meta property="og:description"
          content="Helping organisations around the world managing their volunteers, communication and work schedules."/>
    <meta property="og:url" content="https://aidspace.io/legal/terms-of-service/"/>
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
    <section id="hero" class="wow fadeIn">
        <div class="hero-container">
            <h1>Welcome to eStartups</h1>
            <h2>Elegant Bootstrap Template for Startups, Apps &amp; more...</h2>
            <img src="img/hero-img.png" alt="Hero Imgs">
            <a href="#get-started" class="btn-get-started scrollto">Get Started</a>
            <div class="btns">
                <a href="#"><i class="fa fa-apple fa-3x"></i> App Store</a>
                <a href="#"><i class="fa fa-play fa-3x"></i> Google Play</a>
                <a href="#"><i class="fa fa-windows fa-3x"></i> windows</a>
            </div>
        </div>
    </section><!-- #hero -->


    <section class="how_it_works"></section>
    <section class="latest_features"></section>
    <section class="unique_advantages"></section>
    <section class="development_goals"></section>
    <section class="unique_advantages"></section>
    <section class="get_touch"></section>
    <section class="sign_up"></section>

    {{--<div id="hgr_sections">--}}
        {{--<div id="home" class="pagesection row">--}}
            {{--<div class="vc_col-md-12">--}}
                {{--<div class="container">--}}
                    {{--<div class="slideContent gu12">--}}
                        {{--<section id="about-17" data-vc-full-width="true" data-vc-full-width-init="false"--}}
                                 {{--class="vc_section light-scheme vc_custom_1541054741062 vc_section-has-fill">--}}
                            {{--<div class="vc_row wpb_row vc_row-fluid vc_custom_1533017361220">--}}
                                {{--<div class="wpb_column vc_column_container vc_col-sm-12">--}}
                                    {{--<div class="vc_column-inner ">--}}
                                        {{--<div class="wpb_wrapper">--}}
                                            {{--<div--}}
                                                {{--class="wpb_text_column wpb_content_element  vc_custom_1534409972237">--}}
                                                {{--<div class="wpb_wrapper">--}}
                                                    {{--<h1 style="text-align: center;">AidSpace Volunteers</h1>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<div--}}
                                                {{--class="wpb_text_column wpb_content_element  vc_custom_1542799124521 highlight word">--}}
                                                {{--<div class="wpb_wrapper">--}}
                                                    {{--<h3 style="text-align: center;">Helping organisations managing--}}
                                                        {{--volunteers,</h3>--}}
                                                    {{--<h3 class="highlight-word" style="text-align: center;">--}}
                                                        {{--communication--}}
                                                        {{--and work schedules.</h3>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="vc_btn3-container vc_btn3-center">--}}
                                                {{--<a style="background-color:#65d656; color:#ffffff;"--}}
                                                   {{--class="vc_general vc_btn3 vc_btn3-size-lg vc_btn3-shape-rounded vc_btn3-style-custom"--}}
                                                   {{--href="https://volunteers.aidspace.io/signup" title=""--}}
                                                   {{--target="_blank"--}}
                                                   {{--onclick="handleSignup(event)">TRY IT FOR FREE</a></div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div data-vc-full-width="true" data-vc-full-width-init="false"--}}
                                 {{--class="vc_row wpb_row vc_row-fluid vc_custom_1533059769525 vc_row-has-fill">--}}
                                {{--<div class="wpb_column vc_column_container vc_col-sm-6">--}}
                                    {{--<div class="vc_column-inner vc_custom_1534500016236">--}}
                                        {{--<div class="wpb_wrapper">--}}
                                            {{--<div class="wpb_text_column wpb_content_element ">--}}
                                                {{--<div class="wpb_wrapper">--}}
                                                    {{--<h2 style="text-align: left;">How it works?</h2>--}}

                                                {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<div--}}
                                                {{--class="wpb_text_column wpb_content_element  vc_custom_1533059815121">--}}
                                                {{--<div class="wpb_wrapper">--}}
                                                    {{--<p style="text-align: left;" align="LEFT">This is the first tool--}}
                                                        {{--in--}}
                                                        {{--the box that serves as an inclusive volunteer management--}}
                                                        {{--application.</p>--}}
                                                    {{--<p style="text-align: left;" align="LEFT">Its features are--}}
                                                        {{--designed--}}
                                                        {{--to operate and communicate with your organisation’s--}}
                                                        {{--volunteers--}}
                                                        {{--from the very beginning.</p>--}}
                                                    {{--<p style="text-align: left;" align="LEFT">Improves the daily--}}
                                                        {{--work,--}}
                                                        {{--processes and the workflow in a secure and user-friendly--}}
                                                        {{--appearance.</p>--}}

                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="wpb_column vc_column_container vc_col-sm-6">--}}
                                    {{--<div class="vc_column-inner ">--}}
                                        {{--<div class="wpb_wrapper">--}}
                                            {{--<div--}}
                                                {{--class="wpb_video_widget wpb_content_element vc_clearfix   vc_video-aspect-ratio-169 vc_video-el-width-100 vc_video-align-right">--}}
                                                {{--<div class="wpb_wrapper">--}}

                                                    {{--<div class="wpb_video_wrapper">--}}
                                                        {{--<iframe width="1180" height="664"--}}
                                                                {{--src="https://www.youtube.com/embed/h5QS1eR8H4c?feature=oembed"--}}
                                                                {{--frameborder="0" allow="autoplay; encrypted-media"--}}
                                                                {{--allowfullscreen></iframe>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="vc_row-full-width vc_clearfix"></div>--}}
                            {{--<div class="vc_row wpb_row vc_row-fluid"></div>--}}
                            {{--<div class="vc_row wpb_row vc_row-fluid vc_custom_1539333057606">--}}
                                {{--<div class="wpb_column vc_column_container vc_col-sm-12">--}}
                                    {{--<div class="vc_column-inner ">--}}
                                        {{--<div class="wpb_wrapper">--}}
                                            {{--<div--}}
                                                {{--class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_fadeIn fadeIn">--}}
                                                {{--<div class="wpb_wrapper">--}}
                                                    {{--<h2 style="text-align: center;">Latest features available on--}}
                                                        {{--AidSpace Volunteers</h2>--}}

                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="vc_row wpb_row vc_row-fluid vc_custom_1493127194055">--}}
                                {{--<div class="wpb_column vc_column_container vc_col-sm-12">--}}
                                    {{--<div class="vc_column-inner ">--}}
                                        {{--<div class="wpb_wrapper">--}}
                                            {{--<div class="vc_tta-container" data-vc-action="collapse">--}}
                                                {{--<div--}}
                                                    {{--class="vc_general vc_tta vc_tta-tabs vc_tta-color-white vc_tta-style-modern vc_tta-shape-rounded vc_tta-spacing-5 vc_tta-gap-30 vc_tta-o-no-fill vc_tta-tabs-position-left vc_tta-controls-align-left ">--}}
                                                    {{--<div class="vc_tta-tabs-container">--}}
                                                        {{--<ul class="vc_tta-tabs-list">--}}
                                                            {{--<li class="vc_tta-tab vc_active" data-vc-tab><a--}}
                                                                    {{--href="#1539332047467-230ebaed-d5d5" data-vc-tabs--}}
                                                                    {{--data-vc-container=".vc_tta"><i--}}
                                                                        {{--class="vc_tta-icon fa fa-newspaper-o"></i><span--}}
                                                                        {{--class="vc_tta-title-text">Dashboard updates feed</span></a>--}}
                                                            {{--</li>--}}
                                                            {{--<li class="vc_tta-tab" data-vc-tab><a--}}
                                                                    {{--href="#1543391148474-0bfde0de-96eb" data-vc-tabs--}}
                                                                    {{--data-vc-container=".vc_tta"><i--}}
                                                                        {{--class="vc_tta-icon fa fa-envelope-o"></i><span--}}
                                                                        {{--class="vc_tta-title-text">Inbox</span></a>--}}
                                                            {{--</li>--}}
                                                            {{--<li class="vc_tta-tab" data-vc-tab><a--}}
                                                                    {{--href="#1539332047297-2b8abf43-a7db" data-vc-tabs--}}
                                                                    {{--data-vc-container=".vc_tta"><i--}}
                                                                        {{--class="vc_tta-icon fa fa-calendar"></i><span--}}
                                                                        {{--class="vc_tta-title-text">Scheduling module</span></a>--}}
                                                            {{--</li>--}}
                                                            {{--<li class="vc_tta-tab" data-vc-tab><a--}}
                                                                    {{--href="#1539332047573-6d262b6d-69f8" data-vc-tabs--}}
                                                                    {{--data-vc-container=".vc_tta"><i--}}
                                                                        {{--class="vc_tta-icon fa fa-calendar-check-o"></i><span--}}
                                                                        {{--class="vc_tta-title-text">Event module</span></a>--}}
                                                            {{--</li>--}}
                                                            {{--<li class="vc_tta-tab" data-vc-tab><a--}}
                                                                    {{--href="#1539332047681-79e40e72-bdca" data-vc-tabs--}}
                                                                    {{--data-vc-container=".vc_tta"><i--}}
                                                                        {{--class="vc_tta-icon fa fa-book"></i><span--}}
                                                                        {{--class="vc_tta-title-text">Tutorials and Guides</span></a>--}}
                                                            {{--</li>--}}
                                                            {{--<li class="vc_tta-tab" data-vc-tab><a--}}
                                                                    {{--href="#1539332867939-30f2649e-1a9a" data-vc-tabs--}}
                                                                    {{--data-vc-container=".vc_tta"><i--}}
                                                                        {{--class="vc_tta-icon fa fa-history"></i><span--}}
                                                                        {{--class="vc_tta-title-text">Work history</span></a>--}}
                                                            {{--</li>--}}
                                                            {{--<li class="vc_tta-tab" data-vc-tab><a--}}
                                                                    {{--href="#1540397621642-95145261-df74" data-vc-tabs--}}
                                                                    {{--data-vc-container=".vc_tta"><i--}}
                                                                        {{--class="vc_tta-icon fa fa-print"></i><span--}}
                                                                        {{--class="vc_tta-title-text">Report print</span></a>--}}
                                                            {{--</li>--}}
                                                            {{--<li class="vc_tta-tab" data-vc-tab><a--}}
                                                                    {{--href="#1540397660299-3b5e93bc-f9c4" data-vc-tabs--}}
                                                                    {{--data-vc-container=".vc_tta"><i--}}
                                                                        {{--class="vc_tta-icon fa fa-check"></i><span--}}
                                                                        {{--class="vc_tta-title-text">Volunteer availability</span></a>--}}
                                                            {{--</li>--}}
                                                            {{--<li class="vc_tta-tab" data-vc-tab><a--}}
                                                                    {{--href="#1540397685072-961c206c-9291" data-vc-tabs--}}
                                                                    {{--data-vc-container=".vc_tta"><i--}}
                                                                        {{--class="vc_tta-icon fa fa-bullhorn"></i><span--}}
                                                                        {{--class="vc_tta-title-text">Automated email notifications</span></a>--}}
                                                            {{--</li>--}}
                                                            {{--<li class="vc_tta-tab" data-vc-tab><a--}}
                                                                    {{--href="#1540397723510-537fcc28-6ca2" data-vc-tabs--}}
                                                                    {{--data-vc-container=".vc_tta"><i--}}
                                                                        {{--class="vc_tta-icon fa fa-search"></i><span--}}
                                                                        {{--class="vc_tta-title-text">More advanced search options</span></a>--}}
                                                            {{--</li>--}}
                                                        {{--</ul>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="vc_tta-panels-container">--}}
                                                        {{--<div class="vc_tta-panels">--}}
                                                            {{--<div class="vc_tta-panel vc_active .aidspace-color"--}}
                                                                 {{--id="1539332047467-230ebaed-d5d5"--}}
                                                                 {{--data-vc-content=".vc_tta-panel-body">--}}
                                                                {{--<div class="vc_tta-panel-heading"><h4--}}
                                                                        {{--class="vc_tta-panel-title"><a--}}
                                                                            {{--href="#1539332047467-230ebaed-d5d5"--}}
                                                                            {{--data-vc-accordion--}}
                                                                            {{--data-vc-container=".vc_tta-container"><i--}}
                                                                                {{--class="vc_tta-icon fa fa-newspaper-o"></i><span--}}
                                                                                {{--class="vc_tta-title-text">Dashboard updates feed</span></a>--}}
                                                                    {{--</h4></div>--}}
                                                                {{--<div class="vc_tta-panel-body">--}}
                                                                    {{--<div--}}
                                                                        {{--class="wpb_single_image wpb_content_element vc_align_center">--}}

                                                                        {{--<figure class="wpb_wrapper vc_figure">--}}
                                                                            {{--<div--}}
                                                                                {{--class="vc_single_image-wrapper vc_box_shadow_3d  vc_box_border_grey">--}}
                                                                                {{--<img width="1635" height="823"--}}
                                                                                     {{--src="{{ asset('images/dashboard-updates-feed.png') }}"--}}
                                                                                     {{--class="vc_single_image-img attachment-full"--}}
                                                                                     {{--alt="Updates feed in Dashboard"--}}
                                                                                     {{--srcset="https://aidspace.io/wp-content/uploads/2018/10/dashboard-updates-feed.png 1635w, https://aidspace.io/wp-content/uploads/2018/10/dashboard-updates-feed-300x151.png 300w, https://aidspace.io/wp-content/uploads/2018/10/dashboard-updates-feed-768x387.png 768w, https://aidspace.io/wp-content/uploads/2018/10/dashboard-updates-feed-1024x515.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/dashboard-updates-feed-600x302.png 600w"--}}
                                                                                     {{--sizes="(max-width: 1635px) 100vw, 1635px"/>--}}
                                                                            {{--</div>--}}
                                                                        {{--</figure>--}}
                                                                    {{--</div>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="vc_tta-panel .aidspace-color"--}}
                                                                 {{--id="1543391148474-0bfde0de-96eb"--}}
                                                                 {{--data-vc-content=".vc_tta-panel-body">--}}
                                                                {{--<div class="vc_tta-panel-heading"><h4--}}
                                                                        {{--class="vc_tta-panel-title"><a--}}
                                                                            {{--href="#1543391148474-0bfde0de-96eb"--}}
                                                                            {{--data-vc-accordion--}}
                                                                            {{--data-vc-container=".vc_tta-container"><i--}}
                                                                                {{--class="vc_tta-icon fa fa-envelope-o"></i><span--}}
                                                                                {{--class="vc_tta-title-text">Inbox</span></a>--}}
                                                                    {{--</h4>--}}
                                                                {{--</div>--}}
                                                                {{--<div class="vc_tta-panel-body">--}}
                                                                    {{--<div--}}
                                                                        {{--class="wpb_single_image wpb_content_element vc_align_center">--}}

                                                                        {{--<figure class="wpb_wrapper vc_figure">--}}
                                                                            {{--<div--}}
                                                                                {{--class="vc_single_image-wrapper vc_box_shadow_3d  vc_box_border_grey">--}}
                                                                                {{--<img width="1609" height="337"--}}
                                                                                     {{--src="{{ asset('images/Inbox-AidSpace-Volunteers.png') }}"--}}
                                                                                     {{--class="vc_single_image-img attachment-full"--}}
                                                                                     {{--alt="volunteer management, inbox , new messages"--}}
                                                                                     {{--srcset="https://aidspace.io/wp-content/uploads/2018/11/Inbox-AidSpace-Volunteers.png 1609w, https://aidspace.io/wp-content/uploads/2018/11/Inbox-AidSpace-Volunteers-300x63.png 300w, https://aidspace.io/wp-content/uploads/2018/11/Inbox-AidSpace-Volunteers-768x161.png 768w, https://aidspace.io/wp-content/uploads/2018/11/Inbox-AidSpace-Volunteers-1024x214.png 1024w, https://aidspace.io/wp-content/uploads/2018/11/Inbox-AidSpace-Volunteers-600x126.png 600w"--}}
                                                                                     {{--sizes="(max-width: 1609px) 100vw, 1609px"/>--}}
                                                                            {{--</div>--}}
                                                                        {{--</figure>--}}
                                                                    {{--</div>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="vc_tta-panel"--}}
                                                                 {{--id="1539332047297-2b8abf43-a7db"--}}
                                                                 {{--data-vc-content=".vc_tta-panel-body">--}}
                                                                {{--<div class="vc_tta-panel-heading"><h4--}}
                                                                        {{--class="vc_tta-panel-title"><a--}}
                                                                            {{--href="#1539332047297-2b8abf43-a7db"--}}
                                                                            {{--data-vc-accordion--}}
                                                                            {{--data-vc-container=".vc_tta-container"><i--}}
                                                                                {{--class="vc_tta-icon fa fa-calendar"></i><span--}}
                                                                                {{--class="vc_tta-title-text">Scheduling module</span></a>--}}
                                                                    {{--</h4></div>--}}
                                                                {{--<div class="vc_tta-panel-body">--}}
                                                                    {{--<div--}}
                                                                        {{--class="wpb_single_image wpb_content_element vc_align_center">--}}

                                                                        {{--<figure class="wpb_wrapper vc_figure">--}}
                                                                            {{--<div--}}
                                                                                {{--class="vc_single_image-wrapper vc_box_shadow_3d  vc_box_border_grey">--}}
                                                                                {{--<img width="1633" height="837"--}}
                                                                                     {{--src="{{ asset('images/scheduling-module-2.png') }}"--}}
                                                                                     {{--class="vc_single_image-img attachment-full"--}}
                                                                                     {{--alt="List of volnteers and their assignments in Schedule module"--}}
                                                                                     {{--srcset="https://aidspace.io/wp-content/uploads/2018/10/scheduling-module-2.png 1633w, https://aidspace.io/wp-content/uploads/2018/10/scheduling-module-2-300x154.png 300w, https://aidspace.io/wp-content/uploads/2018/10/scheduling-module-2-768x394.png 768w, https://aidspace.io/wp-content/uploads/2018/10/scheduling-module-2-1024x525.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/scheduling-module-2-600x308.png 600w"--}}
                                                                                     {{--sizes="(max-width: 1633px) 100vw, 1633px"/>--}}
                                                                            {{--</div>--}}
                                                                        {{--</figure>--}}
                                                                    {{--</div>--}}

                                                                    {{--<div--}}
                                                                        {{--class="wpb_single_image wpb_content_element vc_align_center">--}}

                                                                        {{--<figure class="wpb_wrapper vc_figure">--}}
                                                                            {{--<div--}}
                                                                                {{--class="vc_single_image-wrapper vc_box_shadow_3d  vc_box_border_grey">--}}
                                                                                {{--<img width="1653" height="983"--}}
                                                                                     {{--src="{{ asset('images/scheduling-module-1.png') }}"--}}
                                                                                     {{--class="vc_single_image-img attachment-full"--}}
                                                                                     {{--alt="Month view in Schedule module, options to manage shifts"--}}
                                                                                     {{--srcset="https://aidspace.io/wp-content/uploads/2018/10/scheduling-module-1.png 1653w, https://aidspace.io/wp-content/uploads/2018/10/scheduling-module-1-300x178.png 300w, https://aidspace.io/wp-content/uploads/2018/10/scheduling-module-1-768x457.png 768w, https://aidspace.io/wp-content/uploads/2018/10/scheduling-module-1-1024x609.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/scheduling-module-1-600x357.png 600w"--}}
                                                                                     {{--sizes="(max-width: 1653px) 100vw, 1653px"/>--}}
                                                                            {{--</div>--}}
                                                                        {{--</figure>--}}
                                                                    {{--</div>--}}

                                                                    {{--<div--}}
                                                                        {{--class="wpb_single_image wpb_content_element vc_align_center">--}}

                                                                        {{--<figure class="wpb_wrapper vc_figure">--}}
                                                                            {{--<div--}}
                                                                                {{--class="vc_single_image-wrapper vc_box_shadow_3d  vc_box_border_grey">--}}
                                                                                {{--<img width="1920" height="1080"--}}
                                                                                     {{--src="{{ asset('images/scheduling-module-3.png') }}"--}}
                                                                                     {{--class="vc_single_image-img attachment-full"--}}
                                                                                     {{--alt="Creating new shift pop up, new shift"--}}
                                                                                     {{--srcset="https://aidspace.io/wp-content/uploads/2018/10/scheduling-module-3.png 1920w, https://aidspace.io/wp-content/uploads/2018/10/scheduling-module-3-300x169.png 300w, https://aidspace.io/wp-content/uploads/2018/10/scheduling-module-3-768x432.png 768w, https://aidspace.io/wp-content/uploads/2018/10/scheduling-module-3-1024x576.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/scheduling-module-3-600x338.png 600w"--}}
                                                                                     {{--sizes="(max-width: 1920px) 100vw, 1920px"/>--}}
                                                                            {{--</div>--}}
                                                                        {{--</figure>--}}
                                                                    {{--</div>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="vc_tta-panel"--}}
                                                                 {{--id="1539332047573-6d262b6d-69f8"--}}
                                                                 {{--data-vc-content=".vc_tta-panel-body">--}}
                                                                {{--<div class="vc_tta-panel-heading"><h4--}}
                                                                        {{--class="vc_tta-panel-title"><a--}}
                                                                            {{--href="#1539332047573-6d262b6d-69f8"--}}
                                                                            {{--data-vc-accordion--}}
                                                                            {{--data-vc-container=".vc_tta-container"><i--}}
                                                                                {{--class="vc_tta-icon fa fa-calendar-check-o"></i><span--}}
                                                                                {{--class="vc_tta-title-text">Event module</span></a>--}}
                                                                    {{--</h4></div>--}}
                                                                {{--<div class="vc_tta-panel-body">--}}
                                                                    {{--<div--}}
                                                                        {{--class="wpb_single_image wpb_content_element vc_align_center">--}}

                                                                        {{--<figure class="wpb_wrapper vc_figure">--}}
                                                                            {{--<div--}}
                                                                                {{--class="vc_single_image-wrapper vc_box_shadow_3d  vc_box_border_grey">--}}
                                                                                {{--<img width="1644" height="816"--}}
                                                                                     {{--src="{{ asset('images/events-module-1.png') }}"--}}
                                                                                     {{--class="vc_single_image-img attachment-full"--}}
                                                                                     {{--alt="Event, events module"--}}
                                                                                     {{--srcset="https://aidspace.io/wp-content/uploads/2018/10/events-module-1.png 1644w, https://aidspace.io/wp-content/uploads/2018/10/events-module-1-300x149.png 300w, https://aidspace.io/wp-content/uploads/2018/10/events-module-1-768x381.png 768w, https://aidspace.io/wp-content/uploads/2018/10/events-module-1-1024x508.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/events-module-1-600x298.png 600w"--}}
                                                                                     {{--sizes="(max-width: 1644px) 100vw, 1644px"/>--}}
                                                                            {{--</div>--}}
                                                                        {{--</figure>--}}
                                                                    {{--</div>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="vc_tta-panel"--}}
                                                                 {{--id="1539332047681-79e40e72-bdca"--}}
                                                                 {{--data-vc-content=".vc_tta-panel-body">--}}
                                                                {{--<div class="vc_tta-panel-heading"><h4--}}
                                                                        {{--class="vc_tta-panel-title"><a--}}
                                                                            {{--href="#1539332047681-79e40e72-bdca"--}}
                                                                            {{--data-vc-accordion--}}
                                                                            {{--data-vc-container=".vc_tta-container"><i--}}
                                                                                {{--class="vc_tta-icon fa fa-book"></i><span--}}
                                                                                {{--class="vc_tta-title-text">Tutorials and Guides</span></a>--}}
                                                                    {{--</h4></div>--}}
                                                                {{--<div class="vc_tta-panel-body">--}}
                                                                    {{--<div--}}
                                                                        {{--class="wpb_single_image wpb_content_element vc_align_center">--}}

                                                                        {{--<figure class="wpb_wrapper vc_figure">--}}
                                                                            {{--<div--}}
                                                                                {{--class="vc_single_image-wrapper vc_box_shadow_3d  vc_box_border_grey">--}}
                                                                                {{--<img width="1878" height="1034"--}}
                                                                                     {{--src="{{ asset('images/tutorials-and-guides.png') }}"--}}
                                                                                     {{--class="vc_single_image-img attachment-full"--}}
                                                                                     {{--alt="Tutorials for volunteers, tutorials for administrators"--}}
                                                                                     {{--srcset="https://aidspace.io/wp-content/uploads/2018/10/tutorials-and-guides.png 1878w, https://aidspace.io/wp-content/uploads/2018/10/tutorials-and-guides-300x165.png 300w, https://aidspace.io/wp-content/uploads/2018/10/tutorials-and-guides-768x423.png 768w, https://aidspace.io/wp-content/uploads/2018/10/tutorials-and-guides-1024x564.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/tutorials-and-guides-600x330.png 600w"--}}
                                                                                     {{--sizes="(max-width: 1878px) 100vw, 1878px"/>--}}
                                                                            {{--</div>--}}
                                                                        {{--</figure>--}}
                                                                    {{--</div>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="vc_tta-panel"--}}
                                                                 {{--id="1539332867939-30f2649e-1a9a"--}}
                                                                 {{--data-vc-content=".vc_tta-panel-body">--}}
                                                                {{--<div class="vc_tta-panel-heading"><h4--}}
                                                                        {{--class="vc_tta-panel-title"><a--}}
                                                                            {{--href="#1539332867939-30f2649e-1a9a"--}}
                                                                            {{--data-vc-accordion--}}
                                                                            {{--data-vc-container=".vc_tta-container"><i--}}
                                                                                {{--class="vc_tta-icon fa fa-history"></i><span--}}
                                                                                {{--class="vc_tta-title-text">Work history</span></a>--}}
                                                                    {{--</h4></div>--}}
                                                                {{--<div class="vc_tta-panel-body">--}}
                                                                    {{--<div--}}
                                                                        {{--class="wpb_single_image wpb_content_element vc_align_center">--}}

                                                                        {{--<figure class="wpb_wrapper vc_figure">--}}
                                                                            {{--<div--}}
                                                                                {{--class="vc_single_image-wrapper vc_box_shadow_3d  vc_box_border_grey">--}}
                                                                                {{--<img width="1590" height="885"--}}
                                                                                     {{--src="{{ asset('images/work-history.png') }}"--}}
                                                                                     {{--class="vc_single_image-img attachment-full"--}}
                                                                                     {{--alt="Work history of the volunteer, work experience of the volunteer"--}}
                                                                                     {{--srcset="https://aidspace.io/wp-content/uploads/2018/10/work-history.png 1590w, https://aidspace.io/wp-content/uploads/2018/10/work-history-300x167.png 300w, https://aidspace.io/wp-content/uploads/2018/10/work-history-768x427.png 768w, https://aidspace.io/wp-content/uploads/2018/10/work-history-1024x570.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/work-history-600x334.png 600w"--}}
                                                                                     {{--sizes="(max-width: 1590px) 100vw, 1590px"/>--}}
                                                                            {{--</div>--}}
                                                                        {{--</figure>--}}
                                                                    {{--</div>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="vc_tta-panel"--}}
                                                                 {{--id="1540397621642-95145261-df74"--}}
                                                                 {{--data-vc-content=".vc_tta-panel-body">--}}
                                                                {{--<div class="vc_tta-panel-heading"><h4--}}
                                                                        {{--class="vc_tta-panel-title"><a--}}
                                                                            {{--href="#1540397621642-95145261-df74"--}}
                                                                            {{--data-vc-accordion--}}
                                                                            {{--data-vc-container=".vc_tta-container"><i--}}
                                                                                {{--class="vc_tta-icon fa fa-print"></i><span--}}
                                                                                {{--class="vc_tta-title-text">Report print</span></a>--}}
                                                                    {{--</h4></div>--}}
                                                                {{--<div class="vc_tta-panel-body">--}}
                                                                    {{--<div--}}
                                                                        {{--class="wpb_single_image wpb_content_element vc_align_center">--}}

                                                                        {{--<figure class="wpb_wrapper vc_figure">--}}
                                                                            {{--<div--}}
                                                                                {{--class="vc_single_image-wrapper vc_box_shadow_3d  vc_box_border_grey">--}}
                                                                                {{--<img width="1613" height="718"--}}
                                                                                     {{--src="{{ asset('images/reports-print-1.png') }}"--}}
                                                                                     {{--class="vc_single_image-img attachment-full"--}}
                                                                                     {{--alt="Reports print, printing reports for admins or coordinators"--}}
                                                                                     {{--srcset="https://aidspace.io/wp-content/uploads/2018/10/reports-print-1.png 1613w, https://aidspace.io/wp-content/uploads/2018/10/reports-print-1-300x134.png 300w, https://aidspace.io/wp-content/uploads/2018/10/reports-print-1-768x342.png 768w, https://aidspace.io/wp-content/uploads/2018/10/reports-print-1-1024x456.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/reports-print-1-600x267.png 600w"--}}
                                                                                     {{--sizes="(max-width: 1613px) 100vw, 1613px"/>--}}
                                                                            {{--</div>--}}
                                                                        {{--</figure>--}}
                                                                    {{--</div>--}}

                                                                    {{--<div--}}
                                                                        {{--class="wpb_single_image wpb_content_element vc_align_center">--}}

                                                                        {{--<figure class="wpb_wrapper vc_figure">--}}
                                                                            {{--<div--}}
                                                                                {{--class="vc_single_image-wrapper vc_box_shadow_3d  vc_box_border_grey">--}}
                                                                                {{--<img width="1858" height="916"--}}
                                                                                     {{--src="{{ asset('images/reports-print-2.png') }}"--}}
                                                                                     {{--class="vc_single_image-img attachment-full"--}}
                                                                                     {{--alt="Print report preview, report print"--}}
                                                                                     {{--srcset="https://aidspace.io/wp-content/uploads/2018/10/reports-print-2.png 1858w, https://aidspace.io/wp-content/uploads/2018/10/reports-print-2-300x148.png 300w, https://aidspace.io/wp-content/uploads/2018/10/reports-print-2-768x379.png 768w, https://aidspace.io/wp-content/uploads/2018/10/reports-print-2-1024x505.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/reports-print-2-600x296.png 600w"--}}
                                                                                     {{--sizes="(max-width: 1858px) 100vw, 1858px"/>--}}
                                                                            {{--</div>--}}
                                                                        {{--</figure>--}}
                                                                    {{--</div>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="vc_tta-panel"--}}
                                                                 {{--id="1540397660299-3b5e93bc-f9c4"--}}
                                                                 {{--data-vc-content=".vc_tta-panel-body">--}}
                                                                {{--<div class="vc_tta-panel-heading"><h4--}}
                                                                        {{--class="vc_tta-panel-title"><a--}}
                                                                            {{--href="#1540397660299-3b5e93bc-f9c4"--}}
                                                                            {{--data-vc-accordion--}}
                                                                            {{--data-vc-container=".vc_tta-container"><i--}}
                                                                                {{--class="vc_tta-icon fa fa-check"></i><span--}}
                                                                                {{--class="vc_tta-title-text">Volunteer availability</span></a>--}}
                                                                    {{--</h4></div>--}}
                                                                {{--<div class="vc_tta-panel-body">--}}
                                                                    {{--<div--}}
                                                                        {{--class="wpb_single_image wpb_content_element vc_align_center">--}}

                                                                        {{--<figure class="wpb_wrapper vc_figure">--}}
                                                                            {{--<div--}}
                                                                                {{--class="vc_single_image-wrapper vc_box_shadow_3d  vc_box_border_grey">--}}
                                                                                {{--<img width="1335" height="811"--}}
                                                                                     {{--src="{{ asset('images/volunteer-availability-1.png') }}"--}}
                                                                                     {{--class="vc_single_image-img attachment-full"--}}
                                                                                     {{--alt="Availability of the volunteer, aidspace, volutneer availability"--}}
                                                                                     {{--srcset="https://aidspace.io/wp-content/uploads/2018/10/volunteer-availability-1.png 1335w, https://aidspace.io/wp-content/uploads/2018/10/volunteer-availability-1-300x182.png 300w, https://aidspace.io/wp-content/uploads/2018/10/volunteer-availability-1-768x467.png 768w, https://aidspace.io/wp-content/uploads/2018/10/volunteer-availability-1-1024x622.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/volunteer-availability-1-600x364.png 600w"--}}
                                                                                     {{--sizes="(max-width: 1335px) 100vw, 1335px"/>--}}
                                                                            {{--</div>--}}
                                                                        {{--</figure>--}}
                                                                    {{--</div>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="vc_tta-panel"--}}
                                                                 {{--id="1540397685072-961c206c-9291"--}}
                                                                 {{--data-vc-content=".vc_tta-panel-body">--}}
                                                                {{--<div class="vc_tta-panel-heading"><h4--}}
                                                                        {{--class="vc_tta-panel-title"><a--}}
                                                                            {{--href="#1540397685072-961c206c-9291"--}}
                                                                            {{--data-vc-accordion--}}
                                                                            {{--data-vc-container=".vc_tta-container"><i--}}
                                                                                {{--class="vc_tta-icon fa fa-bullhorn"></i><span--}}
                                                                                {{--class="vc_tta-title-text">Automated email notifications</span></a>--}}
                                                                    {{--</h4></div>--}}
                                                                {{--<div class="vc_tta-panel-body">--}}
                                                                    {{--<div--}}
                                                                        {{--class="wpb_single_image wpb_content_element vc_align_center">--}}

                                                                        {{--<figure class="wpb_wrapper vc_figure">--}}
                                                                            {{--<div--}}
                                                                                {{--class="vc_single_image-wrapper vc_box_shadow_3d  vc_box_border_grey">--}}
                                                                                {{--<img width="1400" height="788"--}}
                                                                                     {{--src="{{ asset('images/automated-email-notifications-1.png') }}"--}}
                                                                                     {{--class="vc_single_image-img attachment-full"--}}
                                                                                     {{--alt="Automated email notifications; shifts; awaiting approval; rejected shifts"--}}
                                                                                     {{--srcset="https://aidspace.io/wp-content/uploads/2018/10/automated-email-notifications-1.png 1400w, https://aidspace.io/wp-content/uploads/2018/10/automated-email-notifications-1-300x169.png 300w, https://aidspace.io/wp-content/uploads/2018/10/automated-email-notifications-1-768x432.png 768w, https://aidspace.io/wp-content/uploads/2018/10/automated-email-notifications-1-1024x576.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/automated-email-notifications-1-600x338.png 600w"--}}
                                                                                     {{--sizes="(max-width: 1400px) 100vw, 1400px"/>--}}
                                                                            {{--</div>--}}
                                                                        {{--</figure>--}}
                                                                    {{--</div>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="vc_tta-panel"--}}
                                                                 {{--id="1540397723510-537fcc28-6ca2"--}}
                                                                 {{--data-vc-content=".vc_tta-panel-body">--}}
                                                                {{--<div class="vc_tta-panel-heading"><h4--}}
                                                                        {{--class="vc_tta-panel-title"><a--}}
                                                                            {{--href="#1540397723510-537fcc28-6ca2"--}}
                                                                            {{--data-vc-accordion--}}
                                                                            {{--data-vc-container=".vc_tta-container"><i--}}
                                                                                {{--class="vc_tta-icon fa fa-search"></i><span--}}
                                                                                {{--class="vc_tta-title-text">More advanced search options</span></a>--}}
                                                                    {{--</h4></div>--}}
                                                                {{--<div class="vc_tta-panel-body">--}}
                                                                    {{--<div--}}
                                                                        {{--class="wpb_single_image wpb_content_element vc_align_center">--}}

                                                                        {{--<figure class="wpb_wrapper vc_figure">--}}
                                                                            {{--<div--}}
                                                                                {{--class="vc_single_image-wrapper vc_box_shadow_3d  vc_box_border_grey">--}}
                                                                                {{--<img class="vc_single_image-img"--}}
                                                                                     {{--src="{{ asset('images/advanced-search-options-1017x566.png') }}"--}}
                                                                                     {{--width="1017" height="566"--}}
                                                                                     {{--alt="Advanced search in admin or coordinator profile; volunteers search; match volunteer profile"--}}
                                                                                     {{--title="advanced search options"/>--}}
                                                                            {{--</div>--}}
                                                                        {{--</figure>--}}
                                                                    {{--</div>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</section>--}}
                        {{--<div class="vc_row-full-width vc_clearfix"></div>--}}
                        {{--<section id="services-2" data-vc-full-width="true" data-vc-full-width-init="false"--}}
                                 {{--class="vc_section light-scheme vc_custom_1534498796808 vc_section-has-fill">--}}
                            {{--<div class="vc_row wpb_row vc_row-fluid">--}}
                                {{--<div--}}
                                    {{--class="wpb_animate_when_almost_visible wpb_fadeIn fadeIn wpb_column vc_column_container vc_col-sm-12">--}}
                                    {{--<div class="vc_column-inner ">--}}
                                        {{--<div class="wpb_wrapper">--}}
                                            {{--<div class="wpb_text_column wpb_content_element ">--}}
                                                {{--<div class="wpb_wrapper">--}}
                                                    {{--<h2 style="text-align: center;">Unique advantages</h2>--}}

                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div--}}
                                {{--class="vc_row wpb_row vc_row-fluid vc_custom_1542373178124 vc_row-o-content-middle vc_row-flex">--}}
                                {{--<div class="wpb_column vc_column_container vc_col-sm-4">--}}
                                    {{--<div class="vc_column-inner vc_custom_1534396276372">--}}
                                        {{--<div class="wpb_wrapper">--}}
                                            {{--<div class="vc_row wpb_row vc_inner vc_row-fluid">--}}
                                                {{--<div class="wpb_column vc_column_container vc_col-sm-2">--}}
                                                    {{--<div class="vc_column-inner vc_custom_1534396336826">--}}
                                                        {{--<div class="wpb_wrapper">--}}
                                                            {{--<div--}}
                                                                {{--class="wpb_text_column wpb_content_element  vc_custom_1542727524631">--}}
                                                                {{--<div class="wpb_wrapper">--}}
                                                                    {{--<div--}}
                                                                        {{--class="hgr-icontxt nobg  hgr-onlyicon-5c079761e4de0 "--}}
                                                                        {{--style=""><i class="icon fa fa-heart"--}}
                                                                                    {{--style=" color:#5da6c0;  font-size:32px!important;  line-height:32px!important; "></i>--}}
                                                                    {{--</div>--}}

                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="wpb_column vc_column_container vc_col-sm-9">--}}
                                                    {{--<div class="vc_column-inner vc_custom_1542727462349">--}}
                                                        {{--<div class="wpb_wrapper">--}}
                                                            {{--<div class="wpb_text_column wpb_content_element ">--}}
                                                                {{--<div class="wpb_wrapper">--}}
                                                                    {{--<h4>User friendly</h4>--}}

                                                                {{--</div>--}}
                                                            {{--</div>--}}

                                                            {{--<div--}}
                                                                {{--class="wpb_text_column wpb_content_element  vc_custom_1533058025479">--}}
                                                                {{--<div class="wpb_wrapper">--}}
                                                                    {{--<p>Both for the volunteers, coordinators and--}}
                                                                        {{--administrators.</p>--}}

                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div--}}
                                    {{--class="wpb_animate_when_almost_visible wpb_fadeIn fadeIn wpb_column vc_column_container vc_col-sm-4">--}}
                                    {{--<div class="vc_column-inner vc_custom_1496657021316">--}}
                                        {{--<div class="wpb_wrapper">--}}
                                            {{--<div class="vc_row wpb_row vc_inner vc_row-fluid">--}}
                                                {{--<div class="wpb_column vc_column_container vc_col-sm-2">--}}
                                                    {{--<div class="vc_column-inner ">--}}
                                                        {{--<div class="wpb_wrapper">--}}
                                                            {{--<div class="wpb_text_column wpb_content_element ">--}}
                                                                {{--<div class="wpb_wrapper">--}}
                                                                    {{--<div--}}
                                                                        {{--class="hgr-icontxt nobg  hgr-onlyicon-5c079761e51e3 "--}}
                                                                        {{--style=""><i class="icon fa fa-signal"--}}
                                                                                    {{--style=" color:#5da6c0;  font-size:32px!important;  line-height:32px!important; "></i>--}}
                                                                    {{--</div>--}}

                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="wpb_column vc_column_container vc_col-sm-9">--}}
                                                    {{--<div class="vc_column-inner ">--}}
                                                        {{--<div class="wpb_wrapper">--}}
                                                            {{--<div class="wpb_text_column wpb_content_element ">--}}
                                                                {{--<div class="wpb_wrapper">--}}
                                                                    {{--<h4>Unlimited Volunteers</h4>--}}

                                                                {{--</div>--}}
                                                            {{--</div>--}}

                                                            {{--<div--}}
                                                                {{--class="wpb_text_column wpb_content_element  vc_custom_1533058245355">--}}
                                                                {{--<div class="wpb_wrapper">--}}
                                                                    {{--<p>No restriction or requirement for minimum--}}
                                                                        {{--quantity of volunteers.</p>--}}

                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div--}}
                                    {{--class="wpb_animate_when_almost_visible wpb_fadeIn fadeIn wpb_column vc_column_container vc_col-sm-4">--}}
                                    {{--<div class="vc_column-inner vc_custom_1496657025104">--}}
                                        {{--<div class="wpb_wrapper">--}}
                                            {{--<div class="vc_row wpb_row vc_inner vc_row-fluid">--}}
                                                {{--<div class="wpb_column vc_column_container vc_col-sm-2">--}}
                                                    {{--<div class="vc_column-inner ">--}}
                                                        {{--<div class="wpb_wrapper">--}}
                                                            {{--<div class="wpb_text_column wpb_content_element ">--}}
                                                                {{--<div class="wpb_wrapper">--}}
                                                                    {{--<div--}}
                                                                        {{--class="hgr-icontxt nobg  hgr-onlyicon-5c079761e5580 "--}}
                                                                        {{--style=""><i class="icon fa fa-envelope-o"--}}
                                                                                    {{--style=" color:#5da6c0;  font-size:32px!important;  line-height:32px!important; "></i>--}}
                                                                    {{--</div>--}}

                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="wpb_column vc_column_container vc_col-sm-9">--}}
                                                    {{--<div class="vc_column-inner ">--}}
                                                        {{--<div class="wpb_wrapper">--}}
                                                            {{--<div class="wpb_text_column wpb_content_element ">--}}
                                                                {{--<div class="wpb_wrapper">--}}
                                                                    {{--<h4>Email Priority Support</h4>--}}

                                                                {{--</div>--}}
                                                            {{--</div>--}}

                                                            {{--<div--}}
                                                                {{--class="wpb_text_column wpb_content_element  vc_custom_1542724282964">--}}
                                                                {{--<div class="wpb_wrapper">--}}
                                                                    {{--<p>Support to all organisations for every--}}
                                                                        {{--obstacle--}}
                                                                        {{--on the way.</p>--}}

                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="vc_row wpb_row vc_row-fluid vc_custom_1542373192243">--}}
                                {{--<div--}}
                                    {{--class="wpb_animate_when_almost_visible wpb_fadeIn fadeIn wpb_column vc_column_container vc_col-sm-4">--}}
                                    {{--<div class="vc_column-inner vc_custom_1496657017515">--}}
                                        {{--<div class="wpb_wrapper">--}}
                                            {{--<div class="vc_row wpb_row vc_inner vc_row-fluid">--}}
                                                {{--<div class="wpb_column vc_column_container vc_col-sm-2">--}}
                                                    {{--<div class="vc_column-inner ">--}}
                                                        {{--<div class="wpb_wrapper">--}}
                                                            {{--<div class="wpb_text_column wpb_content_element ">--}}
                                                                {{--<div class="wpb_wrapper">--}}
                                                                    {{--<div--}}
                                                                        {{--class="hgr-icontxt nobg  hgr-onlyicon-5c079761e59dd "--}}
                                                                        {{--style=""><i class="icon fa fa-users"--}}
                                                                                    {{--style=" color:#5da6c0;  font-size:32px!important;  line-height:32px!important; "></i>--}}
                                                                    {{--</div>--}}

                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="wpb_column vc_column_container vc_col-sm-9">--}}
                                                    {{--<div class="vc_column-inner ">--}}
                                                        {{--<div class="wpb_wrapper">--}}
                                                            {{--<div class="wpb_text_column wpb_content_element ">--}}
                                                                {{--<div class="wpb_wrapper">--}}
                                                                    {{--<h4 align="LEFT"><span lang="en-US">Unlimited Administrators And Coordinators</span>--}}
                                                                    {{--</h4>--}}

                                                                {{--</div>--}}
                                                            {{--</div>--}}

                                                            {{--<div--}}
                                                                {{--class="wpb_text_column wpb_content_element  vc_custom_1533058313855">--}}
                                                                {{--<div class="wpb_wrapper">--}}
                                                                    {{--<p>No limitation on the number of people you--}}
                                                                        {{--choose--}}
                                                                        {{--to be in charge of planning and distributing--}}
                                                                        {{--tasks.</p>--}}

                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div--}}
                                    {{--class="wpb_animate_when_almost_visible wpb_fadeIn fadeIn wpb_column vc_column_container vc_col-sm-4">--}}
                                    {{--<div class="vc_column-inner vc_custom_1496657021316">--}}
                                        {{--<div class="wpb_wrapper">--}}
                                            {{--<div class="vc_row wpb_row vc_inner vc_row-fluid">--}}
                                                {{--<div class="wpb_column vc_column_container vc_col-sm-2">--}}
                                                    {{--<div class="vc_column-inner ">--}}
                                                        {{--<div class="wpb_wrapper">--}}
                                                            {{--<div class="wpb_text_column wpb_content_element ">--}}
                                                                {{--<div class="wpb_wrapper">--}}
                                                                    {{--<div--}}
                                                                        {{--class="hgr-icontxt nobg  hgr-onlyicon-5c079761e5db4 "--}}
                                                                        {{--style=""><i class="icon fa fa-comments"--}}
                                                                                    {{--style=" color:#5da6c0;  font-size:32px!important;  line-height:32px!important; "></i>--}}
                                                                    {{--</div>--}}

                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="wpb_column vc_column_container vc_col-sm-9">--}}
                                                    {{--<div class="vc_column-inner ">--}}
                                                        {{--<div class="wpb_wrapper">--}}
                                                            {{--<div class="wpb_text_column wpb_content_element ">--}}
                                                                {{--<div class="wpb_wrapper">--}}
                                                                    {{--<h4>Messaging</h4>--}}

                                                                {{--</div>--}}
                                                            {{--</div>--}}

                                                            {{--<div--}}
                                                                {{--class="wpb_text_column wpb_content_element  vc_custom_1533058521076">--}}
                                                                {{--<div class="wpb_wrapper">--}}
                                                                    {{--<p>Communicate easily with users receiving--}}
                                                                        {{--notifications on new messages on email--}}
                                                                        {{--and/or--}}
                                                                        {{--SMS.</p>--}}

                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div--}}
                                    {{--class="wpb_animate_when_almost_visible wpb_fadeIn fadeIn wpb_column vc_column_container vc_col-sm-4">--}}
                                    {{--<div class="vc_column-inner vc_custom_1496657025104">--}}
                                        {{--<div class="wpb_wrapper">--}}
                                            {{--<div class="vc_row wpb_row vc_inner vc_row-fluid">--}}
                                                {{--<div class="wpb_column vc_column_container vc_col-sm-2">--}}
                                                    {{--<div class="vc_column-inner ">--}}
                                                        {{--<div class="wpb_wrapper">--}}
                                                            {{--<div class="wpb_text_column wpb_content_element ">--}}
                                                                {{--<div class="wpb_wrapper">--}}
                                                                    {{--<div--}}
                                                                        {{--class="hgr-icontxt nobg  hgr-onlyicon-5c079761e615d "--}}
                                                                        {{--style=""><i class="icon fa fa-lock"--}}
                                                                                    {{--style=" color:#5da6c0;  font-size:32px!important;  line-height:32px!important; "></i>--}}
                                                                    {{--</div>--}}

                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="wpb_column vc_column_container vc_col-sm-9">--}}
                                                    {{--<div class="vc_column-inner ">--}}
                                                        {{--<div class="wpb_wrapper">--}}
                                                            {{--<div--}}
                                                                {{--class="wpb_text_column wpb_content_element  vc_custom_1534396789590">--}}
                                                                {{--<div class="wpb_wrapper">--}}
                                                                    {{--<h4 align="LEFT"><span--}}
                                                                            {{--lang="en-US">Secure</span>--}}
                                                                    {{--</h4>--}}

                                                                {{--</div>--}}
                                                            {{--</div>--}}

                                                            {{--<div--}}
                                                                {{--class="wpb_text_column wpb_content_element  vc_custom_1534396799670">--}}
                                                                {{--<div class="wpb_wrapper">--}}
                                                                    {{--<p>We have level of protection as online banking--}}
                                                                        {{--platforms hosted in a secure database center--}}
                                                                        {{--to--}}
                                                                        {{--keep your information safe. Everything is--}}
                                                                        {{--SSL--}}
                                                                        {{--encrypted.</p>--}}

                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="vc_row wpb_row vc_row-fluid vc_custom_1542373202235">--}}
                                {{--<div--}}
                                    {{--class="wpb_animate_when_almost_visible wpb_fadeIn fadeIn wpb_column vc_column_container vc_col-sm-4">--}}
                                    {{--<div class="vc_column-inner vc_custom_1496657017515">--}}
                                        {{--<div class="wpb_wrapper">--}}
                                            {{--<div class="vc_row wpb_row vc_inner vc_row-fluid">--}}
                                                {{--<div class="wpb_column vc_column_container vc_col-sm-2">--}}
                                                    {{--<div class="vc_column-inner ">--}}
                                                        {{--<div class="wpb_wrapper">--}}
                                                            {{--<div class="wpb_text_column wpb_content_element ">--}}
                                                                {{--<div class="wpb_wrapper">--}}
                                                                    {{--<div--}}
                                                                        {{--class="hgr-icontxt nobg  hgr-onlyicon-5c079761e65ba "--}}
                                                                        {{--style=""><i--}}
                                                                            {{--class="icon fa fa-location-arrow"--}}
                                                                            {{--style=" color:#5da6c0;  font-size:32px!important;  line-height:32px!important; "></i>--}}
                                                                    {{--</div>--}}

                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="wpb_column vc_column_container vc_col-sm-9">--}}
                                                    {{--<div class="vc_column-inner ">--}}
                                                        {{--<div class="wpb_wrapper">--}}
                                                            {{--<div class="wpb_text_column wpb_content_element ">--}}
                                                                {{--<div class="wpb_wrapper">--}}
                                                                    {{--<h4>Access anywhere</h4>--}}

                                                                {{--</div>--}}
                                                            {{--</div>--}}

                                                            {{--<div--}}
                                                                {{--class="wpb_text_column wpb_content_element  vc_custom_1534333716796">--}}
                                                                {{--<div class="wpb_wrapper">--}}
                                                                    {{--<p>Your volunteer information as long as your--}}
                                                                        {{--computer is connected to the Internet, from--}}
                                                                        {{--any--}}
                                                                        {{--location at any time. Whether working in the--}}
                                                                        {{--office, at home or on the road, you can--}}
                                                                        {{--access--}}
                                                                        {{--information about volunteers from our--}}
                                                                        {{--web-based--}}
                                                                        {{--application.</p>--}}

                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div--}}
                                    {{--class="wpb_animate_when_almost_visible wpb_fadeIn fadeIn wpb_column vc_column_container vc_col-sm-4">--}}
                                    {{--<div class="vc_column-inner vc_custom_1496657021316">--}}
                                        {{--<div class="wpb_wrapper">--}}
                                            {{--<div class="vc_row wpb_row vc_inner vc_row-fluid">--}}
                                                {{--<div class="wpb_column vc_column_container vc_col-sm-2">--}}
                                                    {{--<div class="vc_column-inner ">--}}
                                                        {{--<div class="wpb_wrapper">--}}
                                                            {{--<div class="wpb_text_column wpb_content_element ">--}}
                                                                {{--<div class="wpb_wrapper">--}}
                                                                    {{--<div--}}
                                                                        {{--class="hgr-icontxt nobg  hgr-onlyicon-5c079761e6960 "--}}
                                                                        {{--style=""><i class="icon fa fa-book"--}}
                                                                                    {{--style=" color:#5da6c0;  font-size:32px!important;  line-height:32px!important; "></i>--}}
                                                                    {{--</div>--}}

                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="wpb_column vc_column_container vc_col-sm-9">--}}
                                                    {{--<div class="vc_column-inner ">--}}
                                                        {{--<div class="wpb_wrapper">--}}
                                                            {{--<div class="wpb_text_column wpb_content_element ">--}}
                                                                {{--<div class="wpb_wrapper">--}}
                                                                    {{--<h4 align="LEFT">Integrated documentation</h4>--}}

                                                                {{--</div>--}}
                                                            {{--</div>--}}

                                                            {{--<div--}}
                                                                {{--class="wpb_text_column wpb_content_element  vc_custom_1534333927982">--}}
                                                                {{--<div class="wpb_wrapper">--}}
                                                                    {{--<p>We offer an extensive library of help topics--}}
                                                                        {{--to--}}
                                                                        {{--provide step-by-step guidance on how to use--}}
                                                                        {{--each--}}
                                                                        {{--feature and perform common volunteer office--}}
                                                                        {{--tasks.--}}
                                                                    {{--</p>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div--}}
                                    {{--class="wpb_animate_when_almost_visible wpb_fadeIn fadeIn wpb_column vc_column_container vc_col-sm-4">--}}
                                    {{--<div class="vc_column-inner vc_custom_1496657025104">--}}
                                        {{--<div class="wpb_wrapper">--}}
                                            {{--<div class="vc_row wpb_row vc_inner vc_row-fluid">--}}
                                                {{--<div class="wpb_column vc_column_container vc_col-sm-2">--}}
                                                    {{--<div class="vc_column-inner ">--}}
                                                        {{--<div class="wpb_wrapper">--}}
                                                            {{--<div class="wpb_text_column wpb_content_element ">--}}
                                                                {{--<div class="wpb_wrapper">--}}
                                                                    {{--<div--}}
                                                                        {{--class="hgr-icontxt nobg  hgr-onlyicon-5c079761e6d01 "--}}
                                                                        {{--style=""><i class="icon fa fa-hdd-o"--}}
                                                                                    {{--style=" color:#5da6c0;  font-size:32px!important;  line-height:32px!important; "></i>--}}
                                                                    {{--</div>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="wpb_column vc_column_container vc_col-sm-9">--}}
                                                    {{--<div class="vc_column-inner ">--}}
                                                        {{--<div class="wpb_wrapper">--}}
                                                            {{--<div class="wpb_text_column wpb_content_element ">--}}
                                                                {{--<div class="wpb_wrapper">--}}
                                                                    {{--<h4>Automatic backups</h4>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}

                                                            {{--<div--}}
                                                                {{--class="wpb_text_column wpb_content_element  vc_custom_1534334033901">--}}
                                                                {{--<div class="wpb_wrapper">--}}
                                                                    {{--<p>To your database daily. You can create--}}
                                                                        {{--additional--}}
                                                                        {{--backup copies for your organization to--}}
                                                                        {{--store.</p>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="vc_row wpb_row vc_row-fluid vc_custom_1542373202235">--}}
                                {{--<div--}}
                                    {{--class="wpb_animate_when_almost_visible wpb_fadeIn fadeIn wpb_column vc_column_container vc_col-sm-4">--}}
                                    {{--<div class="vc_column-inner vc_custom_1496657017515">--}}
                                        {{--<div class="wpb_wrapper">--}}
                                            {{--<div class="vc_row wpb_row vc_inner vc_row-fluid">--}}
                                                {{--<div class="wpb_column vc_column_container vc_col-sm-2">--}}
                                                    {{--<div class="vc_column-inner ">--}}
                                                        {{--<div class="wpb_wrapper">--}}
                                                            {{--<div class="wpb_text_column wpb_content_element ">--}}
                                                                {{--<div class="wpb_wrapper">--}}
                                                                    {{--<div--}}
                                                                        {{--class="hgr-icontxt nobg  hgr-onlyicon-5c079761e71ec "--}}
                                                                        {{--style=""><i class="icon fa fa-eye-slash"--}}
                                                                                    {{--style=" color:#5da6c0;  font-size:32px!important;  line-height:32px!important; "></i>--}}
                                                                    {{--</div>--}}

                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="wpb_column vc_column_container vc_col-sm-9">--}}
                                                    {{--<div class="vc_column-inner ">--}}
                                                        {{--<div class="wpb_wrapper">--}}
                                                            {{--<div class="wpb_text_column wpb_content_element ">--}}
                                                                {{--<div class="wpb_wrapper">--}}
                                                                    {{--<h4>Private/ GDPR compliant</h4>--}}

                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                            {{--<div--}}
                                                                {{--class="wpb_text_column wpb_content_element  vc_custom_1534334348116">--}}
                                                                {{--<div class="wpb_wrapper">--}}
                                                                    {{--<p>You own your data and control the access.--}}
                                                                        {{--AidSpace carefully protects privacy of the--}}
                                                                        {{--information you store through specific--}}
                                                                        {{--procedural and hardware systems.--}}
                                                                        {{--Organizations--}}
                                                                        {{--own their own data.--}}
                                                                    {{--</p>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div--}}
                                    {{--class="wpb_animate_when_almost_visible wpb_fadeIn fadeIn wpb_column vc_column_container vc_col-sm-4">--}}
                                    {{--<div class="vc_column-inner vc_custom_1496657021316">--}}
                                        {{--<div class="wpb_wrapper">--}}
                                            {{--<div class="vc_row wpb_row vc_inner vc_row-fluid">--}}
                                                {{--<div class="wpb_column vc_column_container vc_col-sm-2">--}}
                                                    {{--<div class="vc_column-inner ">--}}
                                                        {{--<div class="wpb_wrapper">--}}
                                                            {{--<div class="wpb_text_column wpb_content_element ">--}}
                                                                {{--<div class="wpb_wrapper">--}}
                                                                    {{--<div--}}
                                                                        {{--class="hgr-icontxt nobg  hgr-onlyicon-5c079761e7599 "--}}
                                                                        {{--style=""><i class="icon fa fa-compass"--}}
                                                                                    {{--style=" color:#5da6c0;  font-size:32px!important;  line-height:32px!important; "></i>--}}
                                                                    {{--</div>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="wpb_column vc_column_container vc_col-sm-9">--}}
                                                    {{--<div class="vc_column-inner ">--}}
                                                        {{--<div class="wpb_wrapper">--}}
                                                            {{--<div class="wpb_text_column wpb_content_element ">--}}
                                                                {{--<div class="wpb_wrapper">--}}
                                                                    {{--<h4>No IT support</h4>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}

                                                            {{--<div--}}
                                                                {{--class="wpb_text_column wpb_content_element  vc_custom_1534333609861">--}}
                                                                {{--<div class="wpb_wrapper">--}}
                                                                    {{--<p>We use a refined comparative database to--}}
                                                                        {{--store--}}
                                                                        {{--your volunteer information. No software--}}
                                                                        {{--installation and no updates to worry about –--}}
                                                                        {{--they are done automatically. Access your--}}
                                                                        {{--account--}}
                                                                        {{--from anywhere with no IT support--}}
                                                                        {{--required!</p>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div--}}
                                    {{--class="wpb_animate_when_almost_visible wpb_fadeIn fadeIn wpb_column vc_column_container vc_col-sm-4">--}}
                                    {{--<div class="vc_column-inner vc_custom_1496657025104">--}}
                                        {{--<div class="wpb_wrapper">--}}
                                            {{--<div class="vc_row wpb_row vc_inner vc_row-fluid">--}}
                                                {{--<div class="wpb_column vc_column_container vc_col-sm-2">--}}
                                                    {{--<div class="vc_column-inner ">--}}
                                                        {{--<div class="wpb_wrapper">--}}
                                                            {{--<div class="wpb_text_column wpb_content_element ">--}}
                                                                {{--<div class="wpb_wrapper">--}}
                                                                    {{--<div--}}
                                                                        {{--class="hgr-icontxt nobg  hgr-onlyicon-5c079761e794a "--}}
                                                                        {{--style=""><i class="icon fa fa-cloud"--}}
                                                                                    {{--style=" color:#5da6c0;  font-size:32px!important;  line-height:32px!important; "></i>--}}
                                                                    {{--</div>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="wpb_column vc_column_container vc_col-sm-9">--}}
                                                    {{--<div class="vc_column-inner ">--}}
                                                        {{--<div class="wpb_wrapper">--}}
                                                            {{--<div class="wpb_text_column wpb_content_element ">--}}
                                                                {{--<div class="wpb_wrapper">--}}
                                                                    {{--<h4>In The Cloud</h4>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}

                                                            {{--<div--}}
                                                                {{--class="wpb_text_column wpb_content_element  vc_custom_1533058253565">--}}
                                                                {{--<div class="wpb_wrapper">--}}
                                                                    {{--<p>No extra hardware needed to support your--}}
                                                                        {{--database--}}
                                                                        {{--— it’s all in the cloud.</p>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="wpb_column vc_column_container vc_col-sm-12">--}}
                                {{--<div class="vc_column-inner ">--}}
                                    {{--<div class="wpb_wrapper"></div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="wpb_text_column wpb_content_element ">--}}
                                {{--<div class="wpb_wrapper">--}}

                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</section>--}}
                        {{--<div class="vc_row-full-width vc_clearfix"></div>--}}
                        {{--<div class="vc_row wpb_row vc_row-fluid vc_custom_1493127938829">--}}
                            {{--<div class="wpb_column vc_column_container vc_col-sm-2">--}}
                                {{--<div class="vc_column-inner ">--}}
                                    {{--<div class="wpb_wrapper">--}}
                                        {{--<div--}}
                                            {{--class="wpb_single_image wpb_content_element vc_align_center  wpb_animate_when_almost_visible wpb_fadeIn fadeIn  image-opacity">--}}

                                            {{--<figure class="wpb_wrapper vc_figure">--}}
                                                {{--<div class="vc_single_image-wrapper   vc_box_border_grey"></div>--}}
                                            {{--</figure>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="wpb_column vc_column_container vc_col-sm-2">--}}
                                {{--<div class="vc_column-inner ">--}}
                                    {{--<div class="wpb_wrapper">--}}
                                        {{--<div--}}
                                            {{--class="wpb_single_image wpb_content_element vc_align_center  wpb_animate_when_almost_visible wpb_fadeIn fadeIn  image-opacity">--}}

                                            {{--<figure class="wpb_wrapper vc_figure">--}}
                                                {{--<div class="vc_single_image-wrapper   vc_box_border_grey"></div>--}}
                                            {{--</figure>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="wpb_column vc_column_container vc_col-sm-2">--}}
                                {{--<div class="vc_column-inner ">--}}
                                    {{--<div class="wpb_wrapper">--}}
                                        {{--<div--}}
                                            {{--class="wpb_single_image wpb_content_element vc_align_center  wpb_animate_when_almost_visible wpb_fadeIn fadeIn  image-opacity">--}}

                                            {{--<figure class="wpb_wrapper vc_figure">--}}
                                                {{--<div class="vc_single_image-wrapper   vc_box_border_grey"></div>--}}
                                            {{--</figure>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="wpb_column vc_column_container vc_col-sm-2">--}}
                                {{--<div class="vc_column-inner ">--}}
                                    {{--<div class="wpb_wrapper">--}}
                                        {{--<div--}}
                                            {{--class="wpb_single_image wpb_content_element vc_align_center  wpb_animate_when_almost_visible wpb_fadeIn fadeIn  image-opacity">--}}

                                            {{--<figure class="wpb_wrapper vc_figure">--}}
                                                {{--<div class="vc_single_image-wrapper   vc_box_border_grey"></div>--}}
                                            {{--</figure>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="wpb_column vc_column_container vc_col-sm-2">--}}
                                {{--<div class="vc_column-inner ">--}}
                                    {{--<div class="wpb_wrapper">--}}
                                        {{--<div--}}
                                            {{--class="wpb_single_image wpb_content_element vc_align_center  wpb_animate_when_almost_visible wpb_fadeIn fadeIn  image-opacity">--}}

                                            {{--<figure class="wpb_wrapper vc_figure">--}}
                                                {{--<div class="vc_single_image-wrapper   vc_box_border_grey"></div>--}}
                                            {{--</figure>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="wpb_column vc_column_container vc_col-sm-2">--}}
                                {{--<div class="vc_column-inner ">--}}
                                    {{--<div class="wpb_wrapper">--}}
                                        {{--<div--}}
                                            {{--class="wpb_single_image wpb_content_element vc_align_center  wpb_animate_when_almost_visible wpb_fadeIn fadeIn  image-opacity">--}}

                                            {{--<figure class="wpb_wrapper vc_figure">--}}
                                                {{--<div class="vc_single_image-wrapper   vc_box_border_grey"></div>--}}
                                            {{--</figure>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="vc_row wpb_row vc_row-fluid"></div>--}}
                        {{--<div data-vc-full-width="true" data-vc-full-width-init="false"--}}
                             {{--class="vc_row wpb_row vc_row-fluid vc_column-gap-35 vc_row-o-content-top vc_row-flex">--}}
                            {{--<div class="wpb_column vc_column_container vc_col-sm-12">--}}
                                {{--<div class="vc_column-inner vc_custom_1533025804381">--}}
                                    {{--<div class="wpb_wrapper">--}}
                                        {{--<div class="wpb_text_column wpb_content_element ">--}}
                                            {{--<div class="wpb_wrapper">--}}
                                                {{--<h2 style="text-align: center;">AidSpace and the Sustainable--}}
                                                    {{--Development--}}
                                                    {{--Goals--}}
                                                {{--</h2>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="vc_row-full-width vc_clearfix"></div>--}}
                        {{--<div class="vc_row wpb_row vc_row-fluid">--}}
                            {{--<div class="wpb_column vc_column_container vc_col-sm-4">--}}
                                {{--<div class="vc_column-inner ">--}}
                                    {{--<div class="wpb_wrapper">--}}
                                        {{--<div class="wpb_single_image wpb_content_element vc_align_center">--}}

                                            {{--<figure class="wpb_wrapper vc_figure">--}}
                                                {{--<div--}}
                                                    {{--class="vc_single_image-wrapper vc_box_shadow_3d  vc_box_border_grey">--}}
                                                    {{--<img class="vc_single_image-img "--}}
                                                         {{--src="{{ asset('images/E_INVERTED-SDG-goals_icons-individual-RGB-08-100x100.png') }}"--}}
                                                         {{--width="100" height="100" alt="Companies that uphold labor standards across their own operations and value chains achieve positive reputation and legal stability.--}}

{{--Embracing diversity and inclusion will also lead to greater access to skilled and productive talent."--}}
                                                         {{--title="E_INVERTED SDG goals_icons-individual-RGB-08"/>--}}
                                                {{--</div>--}}
                                            {{--</figure>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="wpb_column vc_column_container vc_col-sm-4">--}}
                                {{--<div class="vc_column-inner ">--}}
                                    {{--<div class="wpb_wrapper">--}}
                                        {{--<div class="wpb_single_image wpb_content_element vc_align_center">--}}

                                            {{--<figure class="wpb_wrapper vc_figure">--}}
                                                {{--<div--}}
                                                    {{--class="vc_single_image-wrapper vc_box_shadow_3d  vc_box_border_grey">--}}
                                                    {{--<img class="vc_single_image-img "--}}
                                                         {{--src="{{ asset('images/E_INVERTED-SDG-goals_icons-individual-RGB-09-100x100.png') }}"--}}
                                                         {{--width="100" height="100"--}}
                                                         {{--alt="Build resilient infrastructure, promote inclusive and sustainable industrialization and foster innovation."--}}
                                                         {{--title="E_INVERTED SDG goals_icons-individual-RGB-09"/>--}}
                                                {{--</div>--}}
                                            {{--</figure>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="wpb_column vc_column_container vc_col-sm-4">--}}
                                {{--<div class="vc_column-inner ">--}}
                                    {{--<div class="wpb_wrapper">--}}
                                        {{--<div class="wpb_single_image wpb_content_element vc_align_center">--}}

                                            {{--<figure class="wpb_wrapper vc_figure">--}}
                                                {{--<div--}}
                                                    {{--class="vc_single_image-wrapper vc_box_shadow_3d  vc_box_border_grey">--}}
                                                    {{--<img class="vc_single_image-img "--}}
                                                         {{--src="{{ asset('images/E_INVERTED-SDG-goals_icons-individual-RGB-17-100x100.png') }}"--}}
                                                         {{--width="100" height="100" alt="Make multi-collaborator partnerships to mobilize and share knowledge, expertise, technologies and financial resources to support the goals in all countries, particularly developing countries.--}}

{{--It further seeks to encourage and promote effective public, public-private and civil society alliances built on the experience and resourcing strategies of partnerships."--}}
                                                         {{--title="E_INVERTED SDG goals_icons-individual-RGB-17"/>--}}
                                                {{--</div>--}}
                                            {{--</figure>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="vc_row wpb_row vc_row-fluid vc_row-o-equal-height vc_row-flex">--}}
                            {{--<div class="wpb_column vc_column_container vc_col-sm-4">--}}
                                {{--<div class="vc_column-inner ">--}}
                                    {{--<div class="wpb_wrapper">--}}
                                        {{--<div class="vc_row wpb_row vc_inner vc_row-fluid">--}}
                                            {{--<div class="wpb_column vc_column_container vc_col-sm-12">--}}
                                                {{--<div class="vc_column-inner ">--}}
                                                    {{--<div class="wpb_wrapper">--}}
                                                        {{--<div class="wpb_text_column wpb_content_element ">--}}
                                                            {{--<div class="wpb_wrapper">--}}
                                                                {{--<h4 style="text-align: left;">Sustainable--}}
                                                                    {{--development--}}
                                                                    {{--goal #8 &#8211; decent work and economic--}}
                                                                    {{--growth--}}
                                                                {{--</h4>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}

                                                        {{--<div class="wpb_text_column wpb_content_element  vc_custom_1541165540001">--}}
                                                            {{--<div class="wpb_wrapper">--}}
                                                                {{--<p style="text-align: left;"><span--}}
                                                                        {{--style="color: #294e5b;"><span lang="en-US">Companies that uphold labor standards across their own operations and value chains achieve positive reputation and legal stability. </span></span>--}}
                                                                {{--</p>--}}
                                                                {{--<p style="text-align: left;"><span--}}
                                                                        {{--style="color: #294e5b;"><span lang="en-US">Embracing diversity and inclusion will also lead to greater access to skilled and productive talent</span></span>.--}}
                                                                {{--</p>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="wpb_column vc_column_container vc_col-sm-4">--}}
                                {{--<div class="vc_column-inner ">--}}
                                    {{--<div class="wpb_wrapper">--}}
                                        {{--<div class="vc_row wpb_row vc_inner vc_row-fluid">--}}
                                            {{--<div class="wpb_column vc_column_container vc_col-sm-12">--}}
                                                {{--<div class="vc_column-inner ">--}}
                                                    {{--<div class="wpb_wrapper">--}}
                                                        {{--<div class="wpb_text_column wpb_content_element ">--}}
                                                            {{--<div class="wpb_wrapper">--}}
                                                                {{--<h4 style="text-align: left;">Sustainable--}}
                                                                    {{--development--}}
                                                                    {{--goal #9 &#8211; Industry, innovation and--}}
                                                                    {{--infrastructure--}}
                                                                {{--</h4>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}

                                                        {{--<div class="wpb_text_column wpb_content_element ">--}}
                                                            {{--<div class="wpb_wrapper">--}}
                                                                {{--<p style="text-align: left;">Technological progress--}}
                                                                    {{--is a--}}
                                                                    {{--key to finding lasting solutions to both--}}
                                                                    {{--economic--}}
                                                                    {{--and environmental challenges, such as providing--}}
                                                                    {{--new--}}
                                                                    {{--jobs and promoting energy efficiency.</p>--}}
                                                                {{--<p style="text-align: left;">More than 4 billion--}}
                                                                    {{--people--}}
                                                                    {{--still do not have access to the Internet, and 90--}}
                                                                    {{--percent are from the developing world. Bridging--}}
                                                                    {{--this--}}
                                                                    {{--digital divide is crucial to ensure equal access--}}
                                                                    {{--to--}}
                                                                    {{--information and knowledge, as well as foster--}}
                                                                    {{--innovation and entrepreneurship.--}}
                                                                {{--</p>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="wpb_column vc_column_container vc_col-sm-4">--}}
                                {{--<div class="vc_column-inner ">--}}
                                    {{--<div class="wpb_wrapper">--}}
                                        {{--<div class="vc_row wpb_row vc_inner vc_row-fluid">--}}
                                            {{--<div class="wpb_column vc_column_container vc_col-sm-12">--}}
                                                {{--<div class="vc_column-inner ">--}}
                                                    {{--<div class="wpb_wrapper">--}}
                                                        {{--<div class="wpb_text_column wpb_content_element ">--}}
                                                            {{--<div class="wpb_wrapper">--}}
                                                                {{--<h4 style="text-align: left;">Sustainable--}}
                                                                    {{--development--}}
                                                                    {{--goal # 17 &#8211; partnerships--}}
                                                                {{--</h4>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}

                                                        {{--<div--}}
                                                            {{--class="wpb_text_column wpb_content_element  vc_custom_1541165585504">--}}
                                                            {{--<div class="wpb_wrapper">--}}
                                                                {{--<p style="text-align: left;"><span--}}
                                                                        {{--style="color: #294e5b;"><span lang="en-US">Make multi-collaborator partnerships to mobilize and share knowledge, expertise, technologies and financial resources to support the goals in all countries, particularly developing countries. </span></span>--}}
                                                                {{--</p>--}}
                                                                {{--<p style="text-align: left;"><span--}}
                                                                        {{--style="color: #294e5b;"><span lang="en-US">It further seeks to encourage and promote effective public, public-private and civil society alliances built on the experience and resourcing strategies of partnerships.</span></span>--}}
                                                                {{--</p>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="vc_row wpb_row vc_row-fluid"></div>--}}
                        {{--<div data-vc-full-width="true" data-vc-full-width-init="false"--}}
                             {{--class="vc_row wpb_row vc_row-fluid vc_custom_1539248288276 vc_row-has-fill vc_column-gap-35 vc_row-o-content-top vc_row-flex">--}}
                            {{--<div class="wpb_column vc_column_container vc_col-sm-12">--}}
                                {{--<div class="vc_column-inner vc_custom_1533025804381">--}}
                                    {{--<div class="wpb_wrapper">--}}
                                        {{--<div class="wpb_text_column wpb_content_element ">--}}
                                            {{--<div class="wpb_wrapper">--}}
                                                {{--<h2 style="text-align: center;">Get in touch now &#8211; sign up for--}}
                                                    {{--our--}}
                                                    {{--newsletter--}}
                                                {{--</h2>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="wpb_column vc_column_container vc_col-sm-4">--}}
                                {{--<div class="vc_column-inner ">--}}
                                    {{--<div class="wpb_wrapper"></div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="wpb_column vc_column_container vc_col-sm-4">--}}
                                {{--<div class="vc_column-inner ">--}}
                                    {{--<div class="wpb_wrapper">--}}
                                        {{--<div class="wpb_text_column wpb_content_element ">--}}
                                            {{--<div class="wpb_wrapper">--}}

                                                {{--<section id="yikes-mailchimp-container-1"--}}
                                                         {{--class="yikes-mailchimp-container yikes-mailchimp-container-1 ">--}}
                                                    {{--<form id="aidspace-newsletter-1"--}}
                                                          {{--class="yikes-easy-mc-form yikes-easy-mc-form-1  "--}}
                                                          {{--method="POST" data-attr-form-id="1">--}}

                                                        {{--<label for="yikes-easy-mc-form-1-EMAIL"--}}
                                                               {{--class="EMAIL-label yikes-mailchimp-field-required ">--}}

                                                            {{--<!-- dictate label visibility -->--}}
                                                            {{--<span class="EMAIL-label">--}}
												{{--Email address											</span>--}}

                                                            {{--<!-- Description Above -->--}}

                                                            {{--<input id="yikes-easy-mc-form-1-EMAIL" name="EMAIL"--}}
                                                                   {{--placeholder="" class="yikes-easy-mc-email "--}}
                                                                   {{--required="required" type="email" value="">--}}

                                                            {{--<!-- Description Below -->--}}

                                                        {{--</label>--}}

                                                        {{--<!-- Honeypot Trap -->--}}
                                                        {{--<input type="hidden" name="yikes-mailchimp-honeypot"--}}
                                                               {{--id="yikes-mailchimp-honeypot-1" value="">--}}

                                                        {{--<!-- List ID -->--}}
                                                        {{--<input type="hidden"--}}
                                                               {{--name="yikes-mailchimp-associated-list-id"--}}
                                                               {{--id="yikes-mailchimp-associated-list-id-1"--}}
                                                               {{--value="18f774a4db">--}}

                                                        {{--<!-- The form that is being submitted! Used to display error/success messages above the correct form -->--}}
                                                        {{--<input type="hidden" name="yikes-mailchimp-submitted-form"--}}
                                                               {{--id="yikes-mailchimp-submitted-form-1" value="1">--}}

                                                        {{--<!-- Submit Button -->--}}
                                                        {{--<button type="submit"--}}
                                                                {{--class="yikes-easy-mc-submit-button yikes-easy-mc-submit-button-1 btn btn-primary vc_general vc_btn3 vc_btn3-size-lg vc_btn3-shape-rounded vc_btn3-style-custom button-blue">--}}
                                                            {{--<span class="yikes-mailchimp-submit-button-span-text">SUBSCRIBE</span>--}}
                                                        {{--</button>                <!-- Nonce Security Check -->--}}
                                                        {{--<input type="hidden" id="yikes_easy_mc_new_subscriber_1"--}}
                                                               {{--name="yikes_easy_mc_new_subscriber"--}}
                                                               {{--value="50f94993e3">--}}
                                                        {{--<input type="hidden" name="_wp_http_referer" value="/"/>--}}
                                                    {{--</form>--}}
                                                    {{--<!-- MailChimp Form generated by Easy Forms for MailChimp v6.4.7 (https://wordpress.org/plugins/yikes-inc-easy-mailchimp-extender/) -->--}}

                                                {{--</section>--}}


                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="wpb_column vc_column_container vc_col-sm-4">--}}
                                {{--<div class="vc_column-inner ">--}}
                                    {{--<div class="wpb_wrapper"></div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="vc_row-full-width vc_clearfix"></div>--}}
                        {{--<section data-vc-full-width="true" data-vc-full-width-init="false"--}}
                                 {{--class="vc_section light-scheme vc_custom_1540751049735 vc_section-has-fill">--}}
                            {{--<div data-vc-full-width="true" data-vc-full-width-init="false"--}}
                                 {{--class="vc_row wpb_row vc_row-fluid column-hover vc_custom_1540748725455">--}}
                                {{--<div class="wpb_column vc_column_container vc_col-sm-12">--}}
                                    {{--<div class="vc_column-inner ">--}}
                                        {{--<div class="wpb_wrapper">--}}
                                            {{--<div--}}
                                                {{--class="wpb_text_column wpb_content_element  vc_custom_1540748699879">--}}
                                                {{--<div class="wpb_wrapper">--}}
                                                    {{--<h3 style="text-align: center;">--}}
                                                        {{--<div class="hgr-icontxt nobg  hgr-onlyicon-5c079761ecd34 "--}}
                                                             {{--style=""><i class="icon outline outline-signpost"--}}
                                                                         {{--style=" color:#5da6c0;  font-size:50px!important;  line-height:50px!important; "></i>--}}
                                                        {{--</div>--}}
                                                        {{--Sign up now and try it for free.--}}
                                                    {{--</h3>--}}

                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="vc_btn3-container vc_btn3-center">--}}
                                                {{--<a style="background-color:#65d656; color:#ffffff;"--}}
                                                   {{--class="vc_general vc_btn3 vc_btn3-size-lg vc_btn3-shape-rounded vc_btn3-style-custom"--}}
                                                   {{--href="https://volunteers.aidspace.io/signup" title=""--}}
                                                   {{--target="_blank"--}}
                                                   {{--onclick="handleSignup(event)">TRY IT FOR FREE</a></div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="vc_row-full-width vc_clearfix"></div>--}}
                        {{--</section>--}}
                        {{--<div class="vc_row-full-width vc_clearfix"></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="clearfix"></div>--}}
        {{--</div>--}}

        {{--<div class="clearfix"></div>--}}
    {{--</div>--}}
@endsection
