@extends('layouts.master')

@section('meta')
    <title>About - AidSpace</title>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="About - AidSpace"/>
    <meta property="og:description"
          content="Helping organisations around the world managing their volunteers, communication and work schedules."/>
    <meta property="og:url" content="https://aidspace.io/about/"/>
    <meta property="og:site_name" content="AidSpace"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="About - AidSpace"/>
    <meta name="twitter:description"
          content="Helping organisations around the world managing their volunteers, communication and work schedules."/>
    <meta name="twitter:image" content="{{ asset('images/logo-new-website-retina.png') }}"/>
@endsection

@section('css')

@endsection

@section('content')

    <section id="about-page">
        <div class="container">
            <div class="about-page-intro">
                <img class="logo" src="{{ asset('images/logo-new-website-retina.png') }}" alt="logo">
                <h3>Providing the digital tools to help organisations around the world in
                    their daily activities.</h3>

                <div class="wrapper-sign-up-button">
                    <a target="_blank" class="sign-up-button" href="https://volunteers.aidspace.io/signup">LEARN
                        MORE</a>
                </div>
            </div>
        </div>
    </section>

    <section class="about-page-descriptions">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="about-page-descriptions-item">
                        <p class="about-page-description-title"><strong>What is AidSpace?</strong></p>

                        <p>AidSpace is the organisation behind the digital platform AidSpace.io, that assists
                            organisations all over the world to manage data and improve digital processes.<br>
                            Since we can extend our digital tools according to any organisation’s requirements there
                            really is no limit to the features of AidSpace.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="about-page-descriptions-item">
                        <p class="about-page-description-title"><strong>How it will help you</strong></p>
                        <p>We will ease and make faster the work you have been doing now with better set of tools. Your
                            organisation will gain access to other multiple gadgets some of you have never considered
                            before.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="about-page-descriptions-item">
                        <p class="about-page-description-title"><strong>What you will get</strong></p>
                        <p>HR management and people management are some of the main features in AidSpace. We also give
                            you additional features such as time tracking, scheduling, communication and online learning
                            resources.<br>
                            <strong>“Simplicity”</strong> is the keyword in AidSpace. We give organisations much more
                            time to pursue their mission with set of tool accessible and usable by all levels of work.
                            From anywhere, at any time.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-page-unique">
        <div class="container">
            <h2><strong>What makes AidSpace unique?</strong></h2>

            <div class="row">
                <div class="col-md-4">
                    <div class="about-page-unique-item">
                        <div class="unique-item-icon">
                            <i class="fa fa-handshake-o" aria-hidden="true"></i>
                        </div>
                        <div class="unique-item-description">
                            <p>Fast adoption – extremely easy to implement in any type of
                                organisation</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="about-page-unique-item">
                        <div class="unique-item-icon">
                            <i class="fa fa-puzzle-piece" aria-hidden="true"></i>
                        </div>
                        <div class="unique-item-description">
                            <p>Modular approach – organisations can use just the needed
                                tools</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="about-page-unique-item">
                        <div class="unique-item-icon">
                            <i class="fa fa-desktop" aria-hidden="true"></i>
                        </div>
                        <div class="unique-item-description">
                            <p>Simple to use – user friendly without getting technical</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="about-page-wrapper-non-profit">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="wow animated fadeIn"><strong>AidSpace is non-profit</strong></h2>

                        <div class="non-profit-text">
                            <p>AidSpace is a non-profit digital solutions organisation that delivers high quality
                                reasonable cost online tools to other organisations – municipalities, trusts or
                                charitable foundations who involve volunteers.</p>
                            <p>The organisation is driven by the dedication to the cause of developing the best and most
                                comfortable online tools for others focused on social causes, events and projects that
                                impact and promote sustainable development worldwide.</p>
                            <p>The application is created to implement easily in cooperatives, advocacy, charity,
                                environmental, healthcare and religious groups&nbsp;who work mainly with volunteers and
                                rely on their commitment and belief in the cause.</p>
                            <p>AidSpace’s mission is the perfect liaison between the organisation and its volunteers at
                                every step and level. Your results and productiveness in your chosen field of activity
                                is AidSpace team’s motivation</p>
                            <p>This project aims at analysis and provision of only the necessary digital tools. The cost
                                paid for the solutions is covering the support and the time that the team invests in
                                improvement, research and production of a user-friendly application.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-page-goals">
        <div class="container">
            <h2 style="text-align: center;"><strong>Our goal</strong></h2>

            <div class="row">
                <div class="col-md-6">
                    <p class="about-page-goals-text">We believe that support by better
                        digital suite is essential in
                        times of crisis, catastrophes or the regular process of assistance.<br>
                        We want for AidSpace to be the online go-to engine for all organisations by providing stronger
                        managerial capabilities</p>
                </div>
                <div class="col-md-6">
                    <p class="about-page-goals-text">and by improving their process flow as well as reducing the
                        occurrence of human error.<br>
                        Security is one of our top concerns. All data is stored in a secure database, all sensitive data
                        flows are encrypted and all this happening with professional hosting providers such as Amazon
                        AWS. In total compliance with GDPR.</p>
                </div>
            </div>
        </div>
    </section>


    <section class="about-page-unique" id="digital-tools">
        <div class="container">
            <h2><strong>Our digital tools</strong></h2>

            <div class="wrapper-digital-tools">
                <div class="row">
                    <div class="col-md-4">
                        <div class="about-page-unique-item">
                            <div class="unique-item-icon">
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                            </div>
                            <div class="unique-item-title">
                                <p><strong>AidSpace Volunteers</strong></p>
                            </div>
                            <div class="unique-item-description">
                                <p style="text-align: center;">Fast adoption – extremely easy to implement in any type
                                    of
                                    organisation</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="about-page-unique-item">
                            <div class="unique-item-icon">
                                <i class="fa fa-users" aria-hidden="true"></i>
                            </div>
                            <div class="unique-item-title">
                                <p><strong>AidSpace People</strong></p>
                            </div>
                            <div class="unique-item-description">
                                <p style="text-align: center;">Modular approach – organisations can use just the needed
                                    tools</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="about-page-unique-item">
                            <div class="unique-item-icon">
                                <i class="fa fa-map-o" aria-hidden="true"></i>
                            </div>
                            <div class="unique-item-title">
                                <p><strong>AidSpace Maps</strong></p>
                            </div>
                            <div class="unique-item-description">
                                <p style="text-align: center;">Simple to use – user friendly without getting
                                    technical</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="get-in-touch">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">

                    <h2>Get in touch now – sign up for updates</h2>

                    <div class="get-touch-wrapper-form">
                        <div class="get-touch-form">

                            <form id="aidspace-newsletter-1" class="yikes-easy-mc-form yikes-easy-mc-form-1  "
                                  method="POST"
                                  data-attr-form-id="1">
                                <label for="yikes-easy-mc-form-1-EMAIL"
                                       class="EMAIL-label yikes-mailchimp-field-required ">
                                    <!-- dictate label visibility -->
                                    <span class="EMAIL-label">Email address</span>
                                    <!-- Description Above -->
                                    <input id="yikes-easy-mc-form-1-EMAIL" name="EMAIL" placeholder=""
                                           class="yikes-easy-mc-email " required="required" type="email" value="">
                                    <!-- Description Below -->
                                </label>

                                <!-- Honeypot Trap -->
                                <input type="hidden" name="yikes-mailchimp-honeypot" id="yikes-mailchimp-honeypot-1"
                                       value="">

                                <!-- List ID -->
                                <input type="hidden" name="yikes-mailchimp-associated-list-id"
                                       id="yikes-mailchimp-associated-list-id-1" value="18f774a4db">

                                <!-- The form that is being submitted! Used to display error/success messages above the correct form -->
                                <input type="hidden" name="yikes-mailchimp-submitted-form"
                                       id="yikes-mailchimp-submitted-form-1"
                                       value="1">

                                <!-- Submit Button -->
                                <button type="submit"
                                        class="sign-up-button yikes-easy-mc-submit-button yikes-easy-mc-submit-button-1 btn btn-primary vc_general vc_btn3 vc_btn3-size-lg vc_btn3-shape-rounded vc_btn3-style-custom button-blue">
                                    <span class="yikes-mailchimp-submit-button-span-text">SUBSCRIBE</span></button>
                                <!-- Nonce Security Check -->
                                <input type="hidden" id="yikes_easy_mc_new_subscriber_1"
                                       name="yikes_easy_mc_new_subscriber"
                                       value="d4e3c305b8">
                                <input type="hidden" name="_wp_http_referer" value="/">
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

