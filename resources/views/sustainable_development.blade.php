@extends('layouts.master')

@section('meta')
    <title>Sustainable development - AidSpace</title>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="Sustainable development - AidSpace"/>
    <meta property="og:description"
          content="Helping organisations around the world managing their volunteers, communication and work schedules."/>
    <meta property="og:url" content="https://aidspace.io/sustainable-development/"/>
    <meta property="og:site_name" content="AidSpace"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="Sustainable development - AidSpace"/>
    <meta name="twitter:description"
          content="Helping organisations around the world managing their volunteers, communication and work schedules."/>
    <meta name="twitter:image" content="{{ asset('images/logo-new-website-retina.png') }}"/>
@endsection

@section('css')

@endsection

@section('content')
    <section id="sustainable-development" class="wow fadeIn">
        <div class="container">
            <div class="intro-flex">
                <h2 style="text-align: center;"><strong>What are the Sustainable development goals?</strong></h2>

                <div class="sustainable-development-intro-image">
                    <img class="vc_single_image-img "
                         src="{{ asset('images/E_2018_SDG_Poster_without_UN_emblem_Letter-US-500x300.png') }}" width="500" height="300"
                         alt="E_2018_SDG_Poster_without_UN_emblem_Letter US">
                </div>
            </div>

            <div class="sustainable-development-intro-text">
                <p style="text-align: left;">SDGs are a collection of 17 global goals set by the United Nations in 2015
                    that &nbsp;governments are expected to adopt – universal call to action to end poverty, protect the
                    planet and ensure that all people enjoy peace and prosperity.</p>
                <p style="text-align: left;">Тhey look towards society and business for helping in their
                    achievement.</p>
                <p style="text-align: left;">The SDGs put a spotlight on great issues and our ability to shape our
                    impact on them by applying creativity and innovation to solve challenges.</p>
            </div>

            <div class="sustainable-development-wrapper-intro-text">
                <div class="sustainable-development-intro-text">
                    <h2 style="text-align: center;">Which goals are compatible with AidSpace?</h2>


                    <h4 style="text-align: left;">Sustainable development goal #8 – decent work and economic growth</h4>
                    <p style="text-align: left;"><span style="color: #333144;"><span lang="en-US">Companies that uphold labor standards across their own operations and value chains achieve positive reputation and legal stability. </span></span>
                    </p>
                    <p style="text-align: left;"><span style="color: #333144;"><span lang="en-US">Embracing diversity and inclusion will also lead to greater access to skilled and productive talent</span></span>.
                    </p>

                    <h4 style="text-align: left;">Sustainable development goal # 17 – partnerships</h4>
                    <p style="text-align: left;"><span style="color: #333144;"><span lang="en-US">Make multi-collaborator partnerships to mobilize and share knowledge, expertise, technologies and financial resources to support the goals in all countries, particularly developing countries. </span></span>
                    </p>
                    <p style="text-align: left;"><span style="color: #333144;"><span lang="en-US">It further seeks to encourage and promote effective public, public-private and civil society alliances built on the experience and resourcing strategies of partnerships.</span></span>.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <section class="sustainable-development-page-global-goal">
        <div class="container">
            <h2>AidSpace &amp; The Global Goals</h2>

            <div class="wrapper-global-goal-images">
                <div class="row">
                    <div class="col-md-6">
                        <div class="global-goal-images">
                            <div class="global-goal-image-wrapper">
                                <img width="349" height="120"
                                     src="{{ asset('images/logo-new-website-retina.png') }}"
                                     class="vc_single_image-img attachment-full" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="global-goal-images">
                            <div class="global-goal-image-wrapper">
                                <img width="382" height="270"
                                     src="{{ asset('images/E_SDG_logo_No-UN-Emblem_square_rgb.png') }}"
                                     class="vc_single_image-img attachment-full" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <p>We produce management systems of digital tools for organisations
                        involved with voluntary work, field work, etc. Our digital tools suite can refer towards people
                        management and HR for any workplace in the industry. We ensure that the digital process of
                        managing teams is more effective and time saving. We provide easy communication in the
                        organisation – the simpler the management is the more effective results are obtained.<br>
                        We are eager to engage in partnerships within our sector or with governments and civil society
                        organisations.</p>

                    <p>
                        <a class="mailtobold" href="mailto: info@aidspace.io">Contact us for more information.</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
