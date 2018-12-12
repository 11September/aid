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
    <section class="wow fadeIn intro">
        <div class="intro-flex">
            <h1>AidSpace Volunteers</h1>
            <h3>Helping organisations managing volunteers, <br>
                communication and work schedules.</h3>

            <div class="wrapper-sign-up-button">
                <a target="_blank" class="sign-up-button" href="https://volunteers.aidspace.io/signup">TRY
                    IT FOR FREE</a>
            </div>
        </div>
    </section>


    <section class="how-it-works">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>How it works?</h2>

                    <div class="how-it-works-text">
                        <p>This is the first tool in the box that serves as an inclusive volunteer management
                            application.</p>
                        <p>Its features are designed to operate and communicate with your organisation’s volunteers from
                            the very beginning.</p>
                        <p>Improves the daily work, processes and the workflow in a secure and user-friendly
                            appearance.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="how-it-works-video-wrapper">
                        <div class="how-it-works-video">
                            <iframe width="1180" height="664"
                                    src="https://www.youtube.com/embed/h5QS1eR8H4c?feature=oembed" frameborder="0"
                                    allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="latest-features">
        <div class="container">
            <h2>Latest features available on AidSpace Volunteers</h2>

            <div class="wrapper-latest-features-content">
                <div class="tab">


                    <button href="#" class="tab-item tablinks" onclick="openCity(event, 'Dashboard')" id="defaultOpen">
                        <i class="vc_tta-icon fa fa-newspaper-o"></i>Dashboard updates feed
                    </button>

                    <button href="#" class="tab-item tablinks" onclick="openCity(event, 'Inbox')">
                        <i class="vc_tta-icon fa fa-envelope-o"></i>Inbox
                    </button>

                    <button href="#" class="tab-item tablinks" onclick="openCity(event, 'Scheduling')">
                        <i class="vc_tta-icon fa fa-calendar"></i>Scheduling module
                    </button>

                    <button href="#" class="tab-item tablinks" onclick="openCity(event, 'Event')">
                        <i class="vc_tta-icon fa fa-calendar-check-o"></i>Event module
                    </button>

                    <button href="#" class="tab-item tablinks" onclick="openCity(event, 'Tutorials')">
                        <i class="vc_tta-icon fa fa-book"></i>Tutorials and Guides
                    </button>

                    <button href="#" class="tab-item tablinks" onclick="openCity(event, 'Work')">
                        <i class="vc_tta-icon fa fa-history"></i>Work history
                    </button>

                    <button href="#" class="tab-item tablinks" onclick="openCity(event, 'Report')">
                        <i class="vc_tta-icon fa fa-print"></i>Report print
                    </button>

                    <button href="#" class="tab-item tablinks" onclick="openCity(event, 'Volunteer')">
                        <i class="vc_tta-icon fa fa-check"></i>Volunteer availability
                    </button>

                    <button href="#" class="tab-item tablinks" onclick="openCity(event, 'Automated')">
                        <i class="vc_tta-icon fa fa-bullhorn"></i>Automated email notifications
                    </button>

                    <button href="#" class="tab-item tablinks" onclick="openCity(event, 'More')">
                        <i class="vc_tta-icon fa fa-search"></i>More advanced search options
                    </button>

                </div>

                <div id="Dashboard" class="tabcontent">
                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1635" height="823" src="{{ asset('images/dashboard-updates-feed.png') }}" alt="Updates feed in Dashboard">
                    </div>
                </div>

                <div id="Inbox" class="tabcontent">
                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1609" height="337"
                             src="{{ asset('images/Inbox-AidSpace-Volunteers.png') }}"
                             alt="volunteer management, inbox , new messages">
                    </div>
                </div>

                <div id="Scheduling" class="tabcontent">
                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1633" height="837"
                             src="{{ asset('images/scheduling-module-2.png') }}"
                             alt="List of volnteers and their assignments in Schedule module">
                    </div>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1633" height="837"
                             src="{{ asset('images/scheduling-module-2.png') }}"
                             alt="List of volnteers and their assignments in Schedule module">
                    </div>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1920" height="1080"
                             src="{{ asset('images/scheduling-module-3.png') }}" alt="Creating new shift pop up, new shift">
                    </div>
                </div>

                <div id="Event" class="tabcontent">
                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1644" height="816"
                             src="{{ asset('images/events-module-1.png') }}" alt="Event, events module">
                    </div>
                </div>

                <div id="Tutorials" class="tabcontent">
                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1878" height="1034"
                             src="{{ asset('images/tutorials-and-guides.png') }}"
                             alt="Tutorials for volunteers, tutorials for administrators">
                    </div>
                </div>

                <div id="Work" class="tabcontent">
                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1590" height="885"
                             src="{{ asset('images/work-history.png') }}"
                             alt="Work history of the volunteer, work experience of the volunteer">
                    </div>
                </div>

                <div id="Report" class="tabcontent">
                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1613" height="718"
                             src="{{ asset('images/reports-print-1.png') }}"
                             alt="Reports print, printing reports for admins or coordinators">
                    </div>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1858" height="916"
                             src="{{ asset('images/reports-print-2.png') }}" alt="Print report preview, report print">
                    </div>
                </div>

                <div id="Volunteer" class="tabcontent">
                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1335" height="811"
                             src="{{ asset('images/volunteer-availability-1.png') }}"
                             alt="Availability of the volunteer, aidspace, volutneer availability">
                    </div>
                </div>

                <div id="Automated" class="tabcontent">
                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1400" height="788"
                             src="{{ asset('images/automated-email-notifications-1.png') }}"
                             alt="Automated email notifications; shifts; awaiting approval; rejected shifts">
                    </div>
                </div>

                <div id="More" class="tabcontent">
                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img class="vc_single_image-img "
                             src="{{ asset('images/advanced-search-options-1017x566.png') }}"
                             width="1017" height="566"
                             alt="Advanced search in admin or coordinator profile; volunteers search; match volunteer profile">
                    </div>
                </div>
            </div>
        </div>


    </section>

    <section class="unique-advantages">
        <div class="container">
            <h2 style="text-align: center;">Unique advantages</h2>

            <div class="row wrapper-unique-advantages-content">
                <div class="col-md-4">
                    <div class="unique-advantages-item">
                        <div class="unique-advantages-item-image">
                            <i class="icon fa fa-heart" style=" "></i>
                        </div>
                        <div class="unique-advantages-item-content">
                            <h4>User friendly</h4>
                            <p>Both for the volunteers, coordinators and administrators.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="unique-advantages-item">
                        <div class="unique-advantages-item-image">
                            <i class="icon fa fa-signal"></i>
                        </div>
                        <div class="unique-advantages-item-content">
                            <h4>Unlimited Volunteers</h4>
                            <p>No restriction or requirement for minimum quantity of volunteers.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="unique-advantages-item">
                        <div class="unique-advantages-item-image">
                            <i class="icon fa fa-envelope-o"></i>
                        </div>
                        <div class="unique-advantages-item-content">
                            <h4>Email Priority Support</h4>
                            <p>Support to all organisations for every obstacle on the way.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="unique-advantages-item">
                        <div class="unique-advantages-item-image">
                            <i class="icon fa fa-users"></i>
                        </div>
                        <div class="unique-advantages-item-content">
                            <h4>Unlimited Administrators And Coordinators</h4>
                            <p>No limitation on the number of people you choose to be in charge of planning and
                                distributing tasks.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="unique-advantages-item">
                        <div class="unique-advantages-item-image">
                            <i class="icon fa fa-comments"></i>
                        </div>
                        <div class="unique-advantages-item-content">
                            <h4>Messaging</h4>
                            <p>Communicate easily with users receiving notifications on new messages on email and/or
                                SMS.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="unique-advantages-item">
                        <div class="unique-advantages-item-image">
                            <i class="icon fa fa-lock"></i>
                        </div>
                        <div class="unique-advantages-item-content">
                            <h4>Secure</h4>
                            <p>We have level of protection as online banking platforms hosted in a secure database
                                center to keep your information safe. Everything is SSL encrypted.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="unique-advantages-item">
                        <div class="unique-advantages-item-image">
                            <i class="icon fa fa-location-arrow"></i>
                        </div>
                        <div class="unique-advantages-item-content">
                            <h4>Access anywhere</h4>
                            <p>Your volunteer information as long as your computer is connected to the Internet, from
                                any location at any time. Whether working in the office, at home or on the road, you can
                                access information about volunteers from our web-based application.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="unique-advantages-item">
                        <div class="unique-advantages-item-image">
                            <i class="icon fa fa-book"></i>
                        </div>
                        <div class="unique-advantages-item-content">
                            <h4>Integrated documentation</h4>
                            <p>We offer an extensive library of help topics to provide step-by-step guidance on how to
                                use each feature and perform common volunteer office tasks.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="unique-advantages-item">
                        <div class="unique-advantages-item-image">
                            <i class="icon fa fa-hdd-o"></i>
                        </div>
                        <div class="unique-advantages-item-content">
                            <h4>Automatic backups</h4>
                            <p>To your database daily. You can create additional backup copies for your organization to
                                store.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="unique-advantages-item">
                        <div class="unique-advantages-item-image">
                            <i class="icon fa fa-eye-slash"></i>
                        </div>
                        <div class="unique-advantages-item-content">
                            <h4>Private/ GDPR compliant</h4>
                            <p>You own your data and control the access. AidSpace carefully protects privacy of the
                                information you store through specific procedural and hardware systems. Organizations
                                own their own data.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="unique-advantages-item">
                        <div class="unique-advantages-item-image">
                            <i class="icon fa fa-compass"></i>
                        </div>
                        <div class="unique-advantages-item-content">
                            <h4>No IT support</h4>
                            <p>We use a refined comparative database to store your volunteer information. No software
                                installation and no updates to worry about – they are done automatically. Access your
                                account from anywhere with no IT support required!</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="unique-advantages-item">
                        <div class="unique-advantages-item-image">
                            <i class="icon fa fa-cloud"></i>
                        </div>
                        <div class="unique-advantages-item-content">
                            <h4>In The Cloud</h4>
                            <p>No extra hardware needed to support your database — it’s all in the cloud.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="development-goals">
        <div class="container">
            <h2>AidSpace and the Sustainable Development Goals</h2>

            <div class="development-goals-wrapper">

                <div class="row flex-development-goals-icons">
                    <div class="col-md-4">
                        <div class="development-goals-icon">
                            <div class="goals-icon">
                                <div class="box_shadow">
                                    <img class="vc_single_image-img "
                                         src="{{ asset('images/E_INVERTED-SDG-goals_icons-individual-RGB-08-100x100.png') }}"
                                         width="100" height="100" alt="Companies that uphold labor standards across their own operations and value chains achieve positive reputation and legal stability.Embracing diversity and inclusion will also lead to greater access to skilled and productive talent.">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="development-goals-icon">
                            <div class="goals-icon">
                                <div class="box_shadow">
                                    <img class="vc_single_image-img "
                                         src="{{ asset('images/E_INVERTED-SDG-goals_icons-individual-RGB-09-100x100.png') }}"
                                         width="100" height="100"
                                         alt="Build resilient infrastructure, promote inclusive and sustainable industrialization and foster innovation.">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="development-goals-icon">
                            <div class="goals-icon">
                                <div class="box_shadow">
                                    <img class="vc_single_image-img "
                                         src="{{ asset('images/E_INVERTED-SDG-goals_icons-individual-RGB-17-100x100.png') }}"
                                         width="100" height="100"
                                         alt="Make multi-collaborator partnerships to mobilize and share knowledge, expertise, technologies and financial resources to support the goals in all countries, particularly developing countries.It further seeks to encourage and promote effective public, public-private and civil society alliances built on the experience and resourcing strategies of partnerships.">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row flex-development-goals-content">
                    <div class="col-md-4">
                        <div class="development-goals-content-block">
                            <h4>Sustainable development goal #8 – decent work and economic growth</h4>

                            <div class="development-goals-description">
                                <p>Companies that uphold labor standards across their own operations and value chains
                                    achieve positive reputation and legal stability.</p>
                                <p>Embracing diversity and inclusion will also lead to greater access to skilled and
                                    productive talent.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="development-goals-content-block">
                            <h4>Sustainable development goal #9 – Industry, innovation and infrastructure</h4>

                            <div class="development-goals-description">
                                <p>Technological progress is a key to finding lasting solutions to both economic and
                                    environmental challenges, such as providing new jobs and promoting energy
                                    efficiency.</p>
                                <p>More than 4 billion people still do not have access to the Internet, and 90 percent
                                    are from the developing world. Bridging this digital divide is crucial to ensure
                                    equal access to information and knowledge, as well as foster innovation and
                                    entrepreneurship.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="development-goals-content-block">
                            <h4>Sustainable development goal # 17 – partnerships</h4>

                            <div class="development-goals-description">
                                <p>Make multi-collaborator partnerships to mobilize and share knowledge, expertise,
                                    technologies and financial resources to support the goals in all countries,
                                    particularly developing countries. </p>
                                <p>It further seeks to encourage and promote effective public, public-private and civil
                                    society alliances built on the experience and resourcing strategies of
                                    partnerships.</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="get_touch">
        <div class="container">
            <h2>Get in touch now – sign up for our newsletter</h2>

            <div class="get-touch-wrapper-form">
                <div class="get-touch-form">
                    <form id="aidspace-newsletter-1" class="yikes-easy-mc-form yikes-easy-mc-form-1  " method="POST"
                          data-attr-form-id="1">
                        <label for="yikes-easy-mc-form-1-EMAIL" class="EMAIL-label yikes-mailchimp-field-required ">
                            <!-- dictate label visibility -->
                            <span class="EMAIL-label">Email address</span>
                            <!-- Description Above -->
                            <input id="yikes-easy-mc-form-1-EMAIL" name="EMAIL" placeholder=""
                                   class="yikes-easy-mc-email " required="required" type="email" value="">
                            <!-- Description Below -->
                        </label>

                        <!-- Honeypot Trap -->
                        <input type="hidden" name="yikes-mailchimp-honeypot" id="yikes-mailchimp-honeypot-1" value="">

                        <!-- List ID -->
                        <input type="hidden" name="yikes-mailchimp-associated-list-id"
                               id="yikes-mailchimp-associated-list-id-1" value="18f774a4db">

                        <!-- The form that is being submitted! Used to display error/success messages above the correct form -->
                        <input type="hidden" name="yikes-mailchimp-submitted-form" id="yikes-mailchimp-submitted-form-1"
                               value="1">

                        <!-- Submit Button -->
                        <button type="submit"
                                class="sign-up-button yikes-easy-mc-submit-button yikes-easy-mc-submit-button-1 btn btn-primary vc_general vc_btn3 vc_btn3-size-lg vc_btn3-shape-rounded vc_btn3-style-custom button-blue">
                            <span class="yikes-mailchimp-submit-button-span-text">SUBSCRIBE</span></button>
                        <!-- Nonce Security Check -->
                        <input type="hidden" id="yikes_easy_mc_new_subscriber_1" name="yikes_easy_mc_new_subscriber"
                               value="d4e3c305b8">
                        <input type="hidden" name="_wp_http_referer" value="/">
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="sign_up">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sign-up-heading">
                        <h3><i class="fa fa-flag-o" aria-hidden="true"></i> Sign up now and try it for free.</h3>
                    </div>

                    <div class="wrapper-sign-up-button">
                        <a target="_blank" class="sign-up-button" href="https://volunteers.aidspace.io/signup">TRY
                            IT FOR FREE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


@section('scripts')
    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>
@endsection
