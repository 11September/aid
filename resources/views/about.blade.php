@extends('layouts.master')

@section('meta')
    <title>About - AidSpace</title>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="About - AidSpace"/>
    <meta property="og:description" content="Helping organisations around the world managing their volunteers, communication and work schedules."/>
    <meta property="og:url" content="https://aidspace.io/about/"/>
    <meta property="og:site_name" content="AidSpace"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="About - AidSpace"/>
    <meta name="twitter:description" content="Helping organisations around the world managing their volunteers, communication and work schedules."/>
    <meta name="twitter:image" content="{{ asset('images/logo-new-website-retina.png') }}"/>
@endsection

@section('css')
    <link rel='stylesheet' id='hgr-vc-extender-style-css' href='{{ asset('css/hgr-vc-extender-elements.min5010.css') }}'
          type='text/css' media='all'/>
    <style>
        #about .hgr-icontxt a {
            height: inherit;
        }
    </style>
@endsection

@section('content')
    {{--<div id="hgr_sections">--}}
        {{--<div id="about" class="row standAlonePage">--}}
            {{--<div class="vc_col-md-12 noPadding">--}}

                {{--<div class="container" style="  ">--}}
                    {{--<div class="slideContent gu12">--}}
                        {{--<section id="hero" data-vc-full-width="true" data-vc-full-width-init="false"--}}
                                 {{--class="vc_section light-scheme vc_custom_1534500320298 vc_row-o-full-height vc_section-o-content-middle vc_section-flex">--}}
                            {{--<div class="vc_row wpb_row vc_row-fluid">--}}
                                {{--<div class="wpb_column vc_column_container vc_col-sm-12">--}}
                                    {{--<div class="vc_column-inner vc_custom_1534500329430">--}}
                                        {{--<div class="wpb_wrapper">--}}
                                            {{--<div class="wpb_single_image wpb_content_element vc_align_center">--}}

                                                {{--<figure class="wpb_wrapper vc_figure">--}}
                                                    {{--<div class="vc_single_image-wrapper   vc_box_border_grey"><img--}}
                                                            {{--width="349" height="120"--}}
                                                            {{--src="{{ asset('images/logo-new-website-retina.png') }}"--}}
                                                            {{--class="vc_single_image-img attachment-large" alt=""--}}
                                                            {{--srcset="{{ asset('images/logo-new-website-retina.png') }}"--}}
                                                            {{--sizes="(max-width: 349px) 100vw, 349px"/></div>--}}
                                                {{--</figure>--}}
                                            {{--</div>--}}

                                            {{--<div--}}
                                                {{--class="wpb_text_column wpb_content_element  vc_custom_1534420002151">--}}
                                                {{--<div class="wpb_wrapper">--}}
                                                    {{--<h3 style="text-align: center;">Providing the digital tools to--}}
                                                        {{--help--}}
                                                        {{--organisations around the world in their daily--}}
                                                        {{--activities.</h3>--}}

                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="vc_btn3-container vc_btn3-center">--}}
                                                {{--<button style="background-color:#5ea6c1; color:#ffffff;"--}}
                                                        {{--class="vc_general vc_btn3 vc_btn3-size-lg vc_btn3-shape-rounded vc_btn3-style-custom"--}}
                                                        {{--onclick="jQuery(&#039;html,body&#039;).animate({scrollTop: jQuery(&quot;#services&quot;).offset().top - 80},1000);">--}}
                                                    {{--LEARN MORE--}}
                                                {{--</button>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</section>--}}
                        {{--<div class="vc_row-full-width vc_clearfix"></div>--}}
                        {{--<section id="services" data-vc-full-width="true" data-vc-full-width-init="false"--}}
                                 {{--class="vc_section light-scheme vc_custom_1533044254970 vc_section-has-fill">--}}
                            {{--<div class="vc_row wpb_row vc_row-fluid vc_custom_1533043633076">--}}
                                {{--<div class="wpb_column vc_column_container vc_col-sm-4">--}}
                                    {{--<div class="vc_column-inner vc_custom_1534500349852">--}}
                                        {{--<div class="wpb_wrapper">--}}
                                            {{--<div--}}
                                                {{--class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1533044055954 vc_row-has-fill">--}}
                                                {{--<div class="wpb_column vc_column_container vc_col-sm-12">--}}
                                                    {{--<div class="vc_column-inner ">--}}
                                                        {{--<div class="wpb_wrapper">--}}
                                                            {{--<div class="wpb_text_column wpb_content_element ">--}}
                                                                {{--<div class="wpb_wrapper">--}}
                                                                    {{--<p><strong>What is AidSpace?</strong></p>--}}

                                                                {{--</div>--}}
                                                            {{--</div>--}}

                                                            {{--<div class="wpb_text_column wpb_content_element ">--}}
                                                                {{--<div class="wpb_wrapper">--}}
                                                                    {{--<p>AidSpace is the organisation behind the--}}
                                                                        {{--digital--}}
                                                                        {{--platform AidSpace.io, that assists--}}
                                                                        {{--organisations--}}
                                                                        {{--all over the world to manage data and--}}
                                                                        {{--improve--}}
                                                                        {{--digital processes.<br/>--}}
                                                                        {{--Since we can extend our digital tools--}}
                                                                        {{--according--}}
                                                                        {{--to any organisation’s requirements there--}}
                                                                        {{--really--}}
                                                                        {{--is no limit to the features of AidSpace.</p>--}}

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
                                            {{--<div--}}
                                                {{--class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1533044049304 vc_row-has-fill">--}}
                                                {{--<div class="wpb_column vc_column_container vc_col-sm-12">--}}
                                                    {{--<div class="vc_column-inner ">--}}
                                                        {{--<div class="wpb_wrapper">--}}
                                                            {{--<div class="wpb_text_column wpb_content_element ">--}}
                                                                {{--<div class="wpb_wrapper">--}}
                                                                    {{--<p><strong>How it will help you</strong></p>--}}

                                                                {{--</div>--}}
                                                            {{--</div>--}}

                                                            {{--<div class="wpb_text_column wpb_content_element ">--}}
                                                                {{--<div class="wpb_wrapper">--}}
                                                                    {{--<p>We will ease and make faster the work you--}}
                                                                        {{--have--}}
                                                                        {{--been doing now with better set of tools.--}}
                                                                        {{--Your--}}
                                                                        {{--organisation will gain access to other--}}
                                                                        {{--multiple--}}
                                                                        {{--gadgets some of you have never considered--}}
                                                                        {{--before.</p>--}}

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
                                            {{--<div--}}
                                                {{--class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1533044042014 vc_row-has-fill">--}}
                                                {{--<div class="wpb_column vc_column_container vc_col-sm-12">--}}
                                                    {{--<div class="vc_column-inner ">--}}
                                                        {{--<div class="wpb_wrapper">--}}
                                                            {{--<div class="wpb_text_column wpb_content_element ">--}}
                                                                {{--<div class="wpb_wrapper">--}}
                                                                    {{--<p><strong>What you will get</strong></p>--}}

                                                                {{--</div>--}}
                                                            {{--</div>--}}

                                                            {{--<div class="wpb_text_column wpb_content_element ">--}}
                                                                {{--<div class="wpb_wrapper">--}}
                                                                    {{--<p>HR management and people management are some--}}
                                                                        {{--of--}}
                                                                        {{--the main features in AidSpace. We also give--}}
                                                                        {{--you--}}
                                                                        {{--additional features such as time tracking,--}}
                                                                        {{--scheduling, communication and online--}}
                                                                        {{--learning--}}
                                                                        {{--resources.<br/>--}}
                                                                        {{--<strong>“Simplicity”</strong> is the keyword--}}
                                                                        {{--in--}}
                                                                        {{--AidSpace. We give organisations much more--}}
                                                                        {{--time--}}
                                                                        {{--to pursue their mission with set of tool--}}
                                                                        {{--accessible and usable by all levels of work.--}}
                                                                        {{--From anywhere, at any time.</p>--}}

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
                        {{--<div class="vc_row wpb_row vc_row-fluid vc_custom_1533052261270">--}}
                            {{--<div class="wpb_column vc_column_container vc_col-sm-12">--}}
                                {{--<div class="vc_column-inner ">--}}
                                    {{--<div class="wpb_wrapper">--}}
                                        {{--<div class="wpb_text_column wpb_content_element ">--}}
                                            {{--<div class="wpb_wrapper">--}}
                                                {{--<h2 style="text-align: center;"><strong>What makes AidSpace--}}
                                                        {{--unique?</strong></h2>--}}

                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="wpb_column vc_column_container vc_col-sm-4">--}}
                                {{--<div class="vc_column-inner ">--}}
                                    {{--<div class="wpb_wrapper">--}}
                                        {{--<div--}}
                                            {{--class="vc_row wpb_row vc_inner vc_row-fluid column-hover vc_custom_1492085108135 vc_row-has-fill">--}}
                                            {{--<div class="wpb_column vc_column_container vc_col-sm-12">--}}
                                                {{--<div class="vc_column-inner ">--}}
                                                    {{--<div class="wpb_wrapper">--}}
                                                        {{--<div class="hgr-icontxt nobg  hgr-onlyicon-5c07977068379 "--}}
                                                             {{--style=" display:block; margin-left:auto; margin-right:auto;">--}}
                                                            {{--<i class="icon outline outline-archery-target"--}}
                                                               {{--style=" color:#5ea6c1;  font-size:60px!important;  line-height:60px!important; "></i>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="wpb_text_column wpb_content_element ">--}}
                                                            {{--<div class="wpb_wrapper">--}}
                                                                {{--<p style="text-align: center;">Fast adoption &#8211;--}}
                                                                    {{--extremely easy to implement in any type of--}}
                                                                    {{--organisation</p>--}}

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
                                        {{--<div--}}
                                            {{--class="vc_row wpb_row vc_inner vc_row-fluid column-hover vc_custom_1533051749757 vc_row-has-fill">--}}
                                            {{--<div class="wpb_column vc_column_container vc_col-sm-12">--}}
                                                {{--<div class="vc_column-inner ">--}}
                                                    {{--<div class="wpb_wrapper">--}}
                                                        {{--<div class="hgr-icontxt nobg  hgr-onlyicon-5c079770685e1 "--}}
                                                             {{--style=" display:block; margin-left:auto; margin-right:auto;">--}}
                                                            {{--<i class="icon outline outline-jigsaw"--}}
                                                               {{--style=" color:#5ea6c1;  font-size:60px!important;  line-height:60px!important; "></i>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="wpb_text_column wpb_content_element ">--}}
                                                            {{--<div class="wpb_wrapper">--}}
                                                                {{--<p style="text-align: center;">Modular approach –--}}
                                                                    {{--organisations can use just the needed tools</p>--}}

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
                                        {{--<div--}}
                                            {{--class="vc_row wpb_row vc_inner vc_row-fluid column-hover vc_custom_1492085112972 vc_row-has-fill">--}}
                                            {{--<div class="wpb_column vc_column_container vc_col-sm-12">--}}
                                                {{--<div class="vc_column-inner ">--}}
                                                    {{--<div class="wpb_wrapper">--}}
                                                        {{--<div class="hgr-icontxt nobg  hgr-onlyicon-5c07977068851 "--}}
                                                             {{--style=" display:block; margin-left:auto; margin-right:auto;">--}}
                                                            {{--<i class="icon outline outline-play-tv"--}}
                                                               {{--style=" color:#5ea6c1;  font-size:60px!important;  line-height:60px!important; "></i>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="wpb_text_column wpb_content_element ">--}}
                                                            {{--<div class="wpb_wrapper">--}}
                                                                {{--<p style="text-align: center;">Simple to use – user--}}
                                                                    {{--friendly without getting technical</p>--}}

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
                        {{--<section id="process" data-vc-full-width="true" data-vc-full-width-init="false"--}}
                                 {{--class="vc_section light-scheme vc_custom_1533044322549">--}}
                            {{--<div class="vc_row wpb_row vc_row-fluid vc_custom_1533044461005">--}}
                                {{--<div--}}
                                    {{--class="wpb_animate_when_almost_visible wpb_fadeIn fadeIn wpb_column vc_column_container vc_col-sm-12">--}}
                                    {{--<div class="vc_column-inner ">--}}
                                        {{--<div class="wpb_wrapper">--}}
                                            {{--<div--}}
                                                {{--class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1533052102749 vc_row-has-fill">--}}
                                                {{--<div class="wpb_column vc_column_container vc_col-sm-12">--}}
                                                    {{--<div class="vc_column-inner ">--}}
                                                        {{--<div class="wpb_wrapper">--}}
                                                            {{--<div class="wpb_text_column wpb_content_element ">--}}
                                                                {{--<div class="wpb_wrapper">--}}
                                                                    {{--<h2 style="text-align: center;"><strong>AidSpace--}}
                                                                            {{--is--}}
                                                                            {{--non-profit</strong></h2>--}}

                                                                {{--</div>--}}
                                                            {{--</div>--}}

                                                            {{--<div class="wpb_text_column wpb_content_element ">--}}
                                                                {{--<div class="wpb_wrapper">--}}
                                                                    {{--<p>AidSpace is a non-profit digital solutions--}}
                                                                        {{--organisation that delivers high quality--}}
                                                                        {{--reasonable cost online tools to other--}}
                                                                        {{--organisations &#8211; municipalities, trusts--}}
                                                                        {{--or--}}
                                                                        {{--charitable foundations who involve--}}
                                                                        {{--volunteers.</p>--}}
                                                                    {{--<p>The organisation is driven by the dedication--}}
                                                                        {{--to--}}
                                                                        {{--the cause of developing the best and most--}}
                                                                        {{--comfortable online tools for others focused--}}
                                                                        {{--on--}}
                                                                        {{--social causes, events and projects that--}}
                                                                        {{--impact--}}
                                                                        {{--and promote sustainable development--}}
                                                                        {{--worldwide.</p>--}}
                                                                    {{--<p>The application is created to implement--}}
                                                                        {{--easily in--}}
                                                                        {{--cooperatives, advocacy, charity,--}}
                                                                        {{--environmental,--}}
                                                                        {{--healthcare and religious groups who work--}}
                                                                        {{--mainly--}}
                                                                        {{--with volunteers and rely on their commitment--}}
                                                                        {{--and--}}
                                                                        {{--belief in the cause.</p>--}}
                                                                    {{--<p>AidSpace&#8217;s mission is the perfect--}}
                                                                        {{--liaison--}}
                                                                        {{--between the organisation and its volunteers--}}
                                                                        {{--at--}}
                                                                        {{--every step and level. Your results and--}}
                                                                        {{--productiveness in your chosen field of--}}
                                                                        {{--activity--}}
                                                                        {{--is AidSpace team’s motivation</p>--}}
                                                                    {{--<p>This project aims at analysis and provision--}}
                                                                        {{--of--}}
                                                                        {{--only the necessary digital tools. The cost--}}
                                                                        {{--paid--}}
                                                                        {{--for the solutions is covering the support--}}
                                                                        {{--and--}}
                                                                        {{--the time that the team invests in--}}
                                                                        {{--improvement,--}}
                                                                        {{--research and production of a user-friendly--}}
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
                            {{--</div>--}}
                        {{--</section>--}}
                        {{--<div class="vc_row-full-width vc_clearfix"></div>--}}
                        {{--<section data-vc-full-width="true" data-vc-full-width-init="false"--}}
                                 {{--class="vc_section light-scheme vc_custom_1534423570369 vc_section-has-fill">--}}
                            {{--<div class="vc_row wpb_row vc_row-fluid">--}}
                                {{--<div--}}
                                    {{--class="wpb_column vc_column_container vc_col-sm-12 vc_hidden-xs vc_col-has-fill">--}}
                                    {{--<div class="vc_column-inner vc_custom_1534500449062">--}}
                                        {{--<div class="wpb_wrapper">--}}
                                            {{--<div class="wpb_text_column wpb_content_element ">--}}
                                                {{--<div class="wpb_wrapper">--}}
                                                    {{--<h2 style="text-align: center;"><strong>Our goal</strong></h2>--}}

                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="vc_row wpb_row vc_row-fluid vc_custom_1533051949050">--}}
                                {{--<div class="wpb_column vc_column_container vc_col-sm-6">--}}
                                    {{--<div class="vc_column-inner ">--}}
                                        {{--<div class="wpb_wrapper">--}}
                                            {{--<div class="wpb_text_column wpb_content_element ">--}}
                                                {{--<div class="wpb_wrapper">--}}
                                                    {{--<p style="text-align: justify;">We believe that support by--}}
                                                        {{--better--}}
                                                        {{--digital suite is essential in times of crisis, catastrophes--}}
                                                        {{--or--}}
                                                        {{--the regular process of assistance.<br/>--}}
                                                        {{--We want for AidSpace to be the online go-to engine for all--}}
                                                        {{--organisations by providing stronger managerial capabilities--}}
                                                    {{--</p>--}}

                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="wpb_column vc_column_container vc_col-sm-6">--}}
                                    {{--<div class="vc_column-inner ">--}}
                                        {{--<div class="wpb_wrapper">--}}
                                            {{--<div class="wpb_text_column wpb_content_element ">--}}
                                                {{--<div class="wpb_wrapper">--}}
                                                    {{--<p style="text-align: justify;">and by improving their process--}}
                                                        {{--flow--}}
                                                        {{--as well as reducing the occurrence of human error.<br/>--}}
                                                        {{--Security is one of our top concerns. All data is stored in a--}}
                                                        {{--secure database, all sensitive data flows are encrypted and--}}
                                                        {{--all--}}
                                                        {{--this happening with professional hosting providers such as--}}
                                                        {{--Amazon AWS. In total compliance with GDPR.</p>--}}

                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div data-vc-full-width="true" data-vc-full-width-init="false"--}}
                                 {{--class="vc_row wpb_row vc_row-fluid vc_custom_1534423530096 vc_row-has-fill">--}}
                                {{--<div class="wpb_column vc_column_container vc_col-sm-12">--}}
                                    {{--<div class="vc_column-inner ">--}}
                                        {{--<div class="wpb_wrapper">--}}
                                            {{--<div class="wpb_text_column wpb_content_element ">--}}
                                                {{--<div class="wpb_wrapper">--}}
                                                    {{--<h2 style="text-align: center;"><strong>Our digital--}}
                                                            {{--tools</strong>--}}
                                                    {{--</h2>--}}

                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="wpb_column vc_column_container vc_col-sm-4">--}}
                                    {{--<div class="vc_column-inner ">--}}
                                        {{--<div class="wpb_wrapper">--}}
                                            {{--<div--}}
                                                {{--class="vc_row wpb_row vc_inner vc_row-fluid column-hover vc_custom_1492085108135 vc_row-has-fill">--}}
                                                {{--<div class="wpb_column vc_column_container vc_col-sm-12">--}}
                                                    {{--<div class="vc_column-inner ">--}}
                                                        {{--<div class="wpb_wrapper">--}}
                                                            {{--<div--}}
                                                                {{--class="hgr-icontxt nobg  hgr-onlyicon-5c07977069581 "--}}
                                                                {{--style=" display:block; margin-left:auto; margin-right:auto;">--}}
                                                                {{--<a href="{{ url('/') }}" target="" title=""><i--}}
                                                                        {{--class="icon outline outline-heart"--}}
                                                                        {{--style=" color:#5ea6c1;  font-size:60px!important;  line-height:60px!important; "></i></a>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="wpb_text_column wpb_content_element ">--}}
                                                                {{--<div class="wpb_wrapper">--}}
                                                                    {{--<p style="text-align: center;"><strong>AidSpace--}}
                                                                            {{--Volunteers</strong></p>--}}

                                                                {{--</div>--}}
                                                            {{--</div>--}}

                                                            {{--<div class="wpb_text_column wpb_content_element ">--}}
                                                                {{--<div class="wpb_wrapper">--}}
                                                                    {{--<p style="text-align: center;">This is the tool--}}
                                                                        {{--that--}}
                                                                        {{--helps organisations around the world--}}
                                                                        {{--managing--}}
                                                                        {{--volunteers, communication and work--}}
                                                                        {{--schedules.</p>--}}

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
                                            {{--<div--}}
                                                {{--class="vc_row wpb_row vc_inner vc_row-fluid column-hover vc_custom_1533051749757 vc_row-has-fill">--}}
                                                {{--<div class="wpb_column vc_column_container vc_col-sm-12">--}}
                                                    {{--<div class="vc_column-inner ">--}}
                                                        {{--<div class="wpb_wrapper">--}}
                                                            {{--<div--}}
                                                                {{--class="hgr-icontxt nobg  hgr-onlyicon-5c07977069858 "--}}
                                                                {{--style=" display:block; margin-left:auto; margin-right:auto;">--}}
                                                                {{--<a href="{{ url('/aidspace-people') }}" target=""--}}
                                                                   {{--title=""><i class="icon outline outline-group"--}}
                                                                               {{--style=" color:#5ea6c1;  font-size:60px!important;  line-height:60px!important; "></i></a>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="wpb_text_column wpb_content_element ">--}}
                                                                {{--<div class="wpb_wrapper">--}}
                                                                    {{--<p style="text-align: center;"><strong>AidSpace--}}
                                                                            {{--People</strong></p>--}}

                                                                {{--</div>--}}
                                                            {{--</div>--}}

                                                            {{--<div class="wpb_text_column wpb_content_element ">--}}
                                                                {{--<div class="wpb_wrapper">--}}
                                                                    {{--<p style="text-align: center;">This is the tool--}}
                                                                        {{--that--}}
                                                                        {{--provides everything needed to make people--}}
                                                                        {{--management more simple and productive.</p>--}}

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
                                            {{--<div--}}
                                                {{--class="vc_row wpb_row vc_inner vc_row-fluid column-hover vc_custom_1492085112972 vc_row-has-fill">--}}
                                                {{--<div class="wpb_column vc_column_container vc_col-sm-12">--}}
                                                    {{--<div class="vc_column-inner ">--}}
                                                        {{--<div class="wpb_wrapper">--}}
                                                            {{--<div--}}
                                                                {{--class="hgr-icontxt nobg  hgr-onlyicon-5c07977069b18 "--}}
                                                                {{--style=" display:block; margin-left:auto; margin-right:auto;">--}}
                                                                {{--<a href="{{ url('/aidspace-maps') }}" target=""--}}
                                                                   {{--title=""><i--}}
                                                                        {{--class="icon outline outline-map-location"--}}
                                                                        {{--style=" color:#5ea6c1;  font-size:60px!important;  line-height:60px!important; "></i></a>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="wpb_text_column wpb_content_element ">--}}
                                                                {{--<div class="wpb_wrapper">--}}
                                                                    {{--<p style="text-align: center;"><strong>AidSpace--}}
                                                                            {{--Maps</strong></p>--}}

                                                                {{--</div>--}}
                                                            {{--</div>--}}

                                                            {{--<div class="wpb_text_column wpb_content_element ">--}}
                                                                {{--<div class="wpb_wrapper">--}}
                                                                    {{--<p style="text-align: center;">This is the tool--}}
                                                                        {{--that--}}
                                                                        {{--helps you stay on track with your people and--}}
                                                                        {{--their assignement location.</p>--}}

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
                            {{--<div class="vc_row-full-width vc_clearfix"></div>--}}
                        {{--</section>--}}
                        {{--<div class="vc_row-full-width vc_clearfix"></div>--}}
                        {{--<section id="contact-3" data-vc-full-width="true" data-vc-full-width-init="false"--}}
                                 {{--class="vc_section light-scheme vc_custom_1534423678025 vc_section-has-fill">--}}
                            {{--<div class="vc_row wpb_row vc_row-fluid">--}}
                                {{--<div class="wpb_column vc_column_container vc_col-sm-3">--}}
                                    {{--<div class="vc_column-inner ">--}}
                                        {{--<div class="wpb_wrapper"></div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="wpb_column vc_column_container vc_col-sm-6">--}}
                                    {{--<div class="vc_column-inner ">--}}
                                        {{--<div class="wpb_wrapper">--}}
                                            {{--<div class="wpb_text_column wpb_content_element ">--}}
                                                {{--<div class="wpb_wrapper">--}}
                                                    {{--<h2 style="text-align: center;">Get in touch now &#8211; sign up--}}
                                                        {{--for--}}
                                                        {{--updates</h2>--}}

                                                {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<section id="yikes-mailchimp-container-1"--}}
                                                     {{--class="yikes-mailchimp-container yikes-mailchimp-container-1 ">--}}
                                                {{--<form id="aidspace-newsletter-1"--}}
                                                      {{--class="yikes-easy-mc-form yikes-easy-mc-form-1  "--}}
                                                      {{--method="POST"--}}
                                                      {{--data-attr-form-id="1">--}}

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
                                                    {{--<input type="hidden" name="yikes-mailchimp-associated-list-id"--}}
                                                           {{--id="yikes-mailchimp-associated-list-id-1"--}}
                                                           {{--value="18f774a4db">--}}

                                                    {{--<!-- The form that is being submitted! Used to display error/success messages above the correct form -->--}}
                                                    {{--<input type="hidden" name="yikes-mailchimp-submitted-form"--}}
                                                           {{--id="yikes-mailchimp-submitted-form-1" value="1">--}}

                                                    {{--<!-- Submit Button -->--}}
                                                    {{--<button type="submit"--}}
                                                            {{--class="yikes-easy-mc-submit-button yikes-easy-mc-submit-button-1 btn btn-primary vc_general vc_btn3 vc_btn3-size-lg vc_btn3-shape-rounded vc_btn3-style-custom button-blue">--}}
                                                        {{--<span--}}
                                                            {{--class="yikes-mailchimp-submit-button-span-text">SUBSCRIBE</span>--}}
                                                    {{--</button>                <!-- Nonce Security Check -->--}}
                                                    {{--<input type="hidden" id="yikes_easy_mc_new_subscriber_1"--}}
                                                           {{--name="yikes_easy_mc_new_subscriber" value="50f94993e3">--}}
                                                    {{--<input type="hidden" name="_wp_http_referer" value="/about/"/>--}}
                                                {{--</form>--}}
                                                {{--<!-- MailChimp Form generated by Easy Forms for MailChimp v6.4.7 (https://wordpress.org/plugins/yikes-inc-easy-mailchimp-extender/) -->--}}

                                            {{--</section>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="wpb_column vc_column_container vc_col-sm-3">--}}
                                    {{--<div class="vc_column-inner ">--}}
                                        {{--<div class="wpb_wrapper"></div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</section>--}}
                        {{--<div class="vc_row-full-width vc_clearfix"></div>--}}


                        {{--<div id="comments" class="comments-area"></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="clearfix"></div>--}}
    {{--</div> <!--Sections END-->--}}

@endsection

