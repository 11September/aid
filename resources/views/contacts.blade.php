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

    {{--<div id="hgr_sections">--}}
    {{--<div id="contact-us" class="row standAlonePage">--}}
    {{--<div class="vc_col-md-12 noPadding">--}}
    {{--<div class="container">--}}
    {{--<div class="slideContent gu12">--}}
    {{--<div class="vc_row wpb_row vc_row-fluid"></div>--}}
    {{--<div data-vc-full-width="true" data-vc-full-width-init="false"--}}
    {{--class="vc_row wpb_row vc_row-fluid vc_custom_1539248288276 vc_row-has-fill vc_column-gap-35 vc_row-o-content-top vc_row-flex">--}}
    {{--<div class="wpb_column vc_column_container vc_col-sm-12">--}}
    {{--<div class="vc_column-inner vc_custom_1533025804381">--}}
    {{--<div class="wpb_wrapper">--}}
    {{--<div class="wpb_text_column wpb_content_element ">--}}
    {{--<div class="wpb_wrapper">--}}
    {{--<h2 style="text-align: center;">Get in touch now</h2>--}}

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
    {{--<div role="form" class="wpcf7" id="wpcf7-f1889-p2787-o1" lang="en-US"--}}
    {{--dir="ltr">--}}
    {{--<div class="screen-reader-response"></div>--}}
    {{--<form action="https://aidspace.io/contact-us/#wpcf7-f1889-p2787-o1"--}}
    {{--method="post" class="wpcf7-form" novalidate="novalidate">--}}
    {{--<div style="display: none;">--}}
    {{--<input type="hidden" name="_wpcf7" value="1889"/>--}}
    {{--<input type="hidden" name="_wpcf7_version" value="5.0.5"/>--}}
    {{--<input type="hidden" name="_wpcf7_locale" value="en_US"/>--}}
    {{--<input type="hidden" name="_wpcf7_unit_tag"--}}
    {{--value="wpcf7-f1889-p2787-o1"/>--}}
    {{--<input type="hidden" name="_wpcf7_container_post" value="2787"/>--}}
    {{--</div>--}}
    {{--<p><label> Your Email (required)<br/>--}}
    {{--<span class="wpcf7-form-control-wrap your-email"><input--}}
    {{--type="email" name="your-email" value="" size="40"--}}
    {{--class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"--}}
    {{--aria-required="true" aria-invalid="false"/></span>--}}
    {{--</label><br/>--}}
    {{--<label> Your name<br/>--}}
    {{--<span class="wpcf7-form-control-wrap your-name"><input--}}
    {{--type="text" name="your-name" value="" size="40"--}}
    {{--class="wpcf7-form-control wpcf7-text"--}}
    {{--aria-invalid="false"/></span> </label><br/>--}}
    {{--<label> Subject<br/>--}}
    {{--<span class="wpcf7-form-control-wrap your-subject"><input--}}
    {{--type="text" name="your-subject" value="" size="40"--}}
    {{--class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"--}}
    {{--aria-required="true" aria-invalid="false"/></span>--}}
    {{--</label><br/>--}}
    {{--<label> Your message (required)<br/>--}}
    {{--<span class="wpcf7-form-control-wrap your-message"><textarea--}}
    {{--name="your-message" cols="40" rows="10"--}}
    {{--class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"--}}
    {{--aria-required="true"--}}
    {{--aria-invalid="false"></textarea></span> </label></p>--}}
    {{--<p><input type="submit" value="Send"--}}
    {{--class="wpcf7-form-control wpcf7-submit"/></p>--}}
    {{--<div class="wpcf7-response-output wpcf7-display-none"></div>--}}
    {{--</form>--}}
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
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="clearfix"></div>--}}
    {{--</div> <!--Sections END-->--}}
@endsection
