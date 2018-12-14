@extends('layouts.master')

@section('meta')
    <title>Roadmap - AidSpace</title>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="Roadmap - AidSpace"/>
    <meta property="og:description"
          content="Helping organisations around the world managing their volunteers, communication and work schedules."/>
    <meta property="og:url" content="https://aidspace.io/roadmap/"/>
    <meta property="og:site_name" content="AidSpace"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="Roadmap - AidSpace"/>
    <meta name="twitter:description"
          content="Helping organisations around the world managing their volunteers, communication and work schedules."/>
    <meta name="twitter:image" content="{{ asset('images/logo-new-website-retina.png') }}"/>
@endsection

@section('css')

@endsection

@section('content')

    <section class="roadmap">
        <div class="intro-flex">
            <h1>Roadmap</h1>
            <h3>Here you can catch up on the new features in development for AidSpace Volunteers.</h3>
        </div>
    </section>

    <section class="roadmap-features">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="roadmap-features-item">
                        <div class="roadmap-features-item-icon">
                            <i class="vc_icon_element-icon fa fa-th-list"></i>
                        </div>
                        <div class="roadmap-features-item-description">
                            <p>Tasks module</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="roadmap-features-item">
                        <div class="roadmap-features-item-icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="roadmap-features-item-description">
                            <p>Send messages by email</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="roadmap-features-item">
                        <div class="roadmap-features-item-icon">
                            <i class="fa fa-clock-o"></i>
                        </div>
                        <div class="roadmap-features-item-description">
                            <p>Time registration module</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="roadmap-features-item">
                        <div class="roadmap-features-item-icon">
                            <i class="fa fa-superpowers"></i>
                        </div>
                        <div class="roadmap-features-item-description">
                            <p>Skills list management</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="roadmap-features-item">
                        <div class="roadmap-features-item-icon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <div class="roadmap-features-item-description">
                            <p>Holidays calendar</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="roadmap-features-item">
                        <div class="roadmap-features-item-icon">
                            <i class="fa fa-list-alt"></i>
                        </div>
                        <div class="roadmap-features-item-description">
                            <p>Dashboard update feeds – file attachments, notifications and custom permissions</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="roadmap-features-item">
                        <div class="roadmap-features-item-icon">
                            <i class="fa fa-trophy"></i>
                        </div>
                        <div class="roadmap-features-item-description">
                            <p>Rewards module with feedback, badges, etc.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="roadmap-features-item">
                        <div class="roadmap-features-item-icon">
                            <i class="fa fa-toggle-off"></i>
                        </div>
                        <div class="roadmap-features-item-description">
                            <p>Turn on/off entire modules</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="roadmap-features-item">
                        <div class="roadmap-features-item-icon">
                            <i class="fa fa-book"></i>
                        </div>
                        <div class="roadmap-features-item-description">
                            <p>Course administration module</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="roadmap-features-item">
                        <div class="roadmap-features-item-icon">
                            <i class="fa fa-pencil"></i>
                        </div>
                        <div class="roadmap-features-item-description">
                            <p>Collaborative editing</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="roadmap-features-item">
                        <div class="roadmap-features-item-icon">
                            <i class="fa fa-users"></i>
                        </div>
                        <div class="roadmap-features-item-description">
                            <p>Volunteers sign up and registration</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="roadmap-features-item">
                        <div class="roadmap-features-item-icon">
                            <i class="fa fa-cogs"></i>
                        </div>
                        <div class="roadmap-features-item-description">
                            <p>Public API</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="roadmap-features-item">
                        <div class="roadmap-features-item-icon">
                            <i class="fa fa-pencil-square-o"></i>
                        </div>
                        <div class="roadmap-features-item-description">
                            <p>Custom fields support</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="roadmap-features-item">
                        <div class="roadmap-features-item-icon">
                            <i class="fa fa-wpforms"></i>
                        </div>
                        <div class="roadmap-features-item-description">
                            <p>Forms for procedures and registrations</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="roadmap-features-item">
                        <div class="roadmap-features-item-icon">
                            <i class="fa fa-paperclip"></i>
                        </div>
                        <div class="roadmap-features-item-description">
                            <p>File attachments</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="roadmap-features-item">
                        <div class="roadmap-features-item-icon">
                            <i class="fa fa-bookmark"></i>
                        </div>
                        <div class="roadmap-features-item-description">
                            <p>Certifications management</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="roadmap-features-item">
                        <div class="roadmap-features-item-icon">
                            <i class="fa fa-magic"></i>
                        </div>
                        <div class="roadmap-features-item-description">
                            <p>Automatic shift booking and shift bidding</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="roadmap-features-item">
                        <div class="roadmap-features-item-icon">
                            <i class="fa fa-flag"></i>
                        </div>
                        <div class="roadmap-features-item-description">
                            <p>Daily summaries by email</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="roadmap-features-item">
                        <div class="roadmap-features-item-icon">
                            <i class="fa fa-bell"></i>
                        </div>
                        <div class="roadmap-features-item-description">
                            <p>Notification preferences for volunteers</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="roadmap-features-item">
                        <div class="roadmap-features-item-icon">
                            <i class="fa fa-bell-o"></i>
                        </div>
                        <div class="roadmap-features-item-description">
                            <p>Reminders for information update</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="roadmap-features-item">
                        <div class="roadmap-features-item-icon">
                            <i class="fa fa-tachometer"></i>
                        </div>
                        <div class="roadmap-features-item-description">
                            <p>Activity dashboard</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="roadmap-features-item">
                        <div class="roadmap-features-item-icon">
                            <i class="fa fa-sliders"></i>
                        </div>
                        <div class="roadmap-features-item-description">
                            <p>More advanced search options</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="roadmap-features-item">
                        <div class="roadmap-features-item-icon">
                            <i class="fa fa-users" aria-hidden="true"></i>
                        </div>
                        <div class="roadmap-features-item-description">
                            <p>Possibility for participation in more than one organisation</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="roadmap-features-item">
                        <div class="roadmap-features-item-icon">
                            <i class="fa fa-file-excel-o"></i>
                        </div>
                        <div class="roadmap-features-item-description">
                            <p>Import volunteers data from a file</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="roadmap-features-item">
                        <div class="roadmap-features-item-icon">
                            <i class="fa fa-sitemap"></i>
                        </div>
                        <div class="roadmap-features-item-description">
                            <p>Machine learning for matching shifts and suggesting shifts to volunteers</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="roadmap-features-item">
                        <div class="roadmap-features-item-icon">
                            <i class="fa fa-commenting"></i>
                        </div>
                        <div class="roadmap-features-item-description">
                            <p>Chatbot – quickly get info or create new records or find shifts, etc.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="roadmap-features-item">
                        <div class="roadmap-features-item-icon">
                            <i class="fa fa-slack"></i>
                        </div>
                        <div class="roadmap-features-item-description">
                            <p>Slack bot</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="roadmap-features-item">
                        <div class="roadmap-features-item-icon">
                            <i class="fa fa-exchange"></i>
                        </div>
                        <div class="roadmap-features-item-description">
                            <p>Volunteer exchange between organisations</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="roadmap-features-item">
                        <div class="roadmap-features-item-icon">
                            <i class="fa fa-bullhorn"></i>
                        </div>
                        <div class="roadmap-features-item-description">
                            <p>Push notifications via browser</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="roadmap-features-item">
                        <div class="roadmap-features-item-icon">
                            <i class="fa fa-play" aria-hidden="true"></i>
                        </div>
                        <div class="roadmap-features-item-description">
                            <p>Mobile access with app (native)</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="roadmap-features-item">
                        <div class="roadmap-features-item-icon">
                            <i class="fa fa-share-square-o"></i>
                        </div>
                        <div class="roadmap-features-item-description">
                            <p>Switch shifts in the schedule</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="roadmap-features-item">
                        <div class="roadmap-features-item-icon">
                            <i class="fa fa-file-text"></i>
                        </div>
                        <div class="roadmap-features-item-description">
                            <p>Template and recurring shifts</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="roadmap-features-item">
                        <div class="roadmap-features-item-icon">
                            <i class="fa fa-sort-amount-asc"></i>
                        </div>
                        <div class="roadmap-features-item-description">
                            <p>Name search in Messages module</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="roadmap-features-item">
                        <div class="roadmap-features-item-icon">
                            <i class="fa fa-tasks"></i>
                        </div>
                        <div class="roadmap-features-item-description">
                            <p>Projects module</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="roadmap-features-item">
                        <div class="roadmap-features-item-icon">
                            <i class="fa fa-check-square-o"></i>
                        </div>
                        <div class="roadmap-features-item-description">
                            <p>Availability to check presence on an event</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="roadmap-features-item">
                        <div class="roadmap-features-item-icon">
                            <i class="fa fa-user-plus" aria-hidden="true"></i>
                        </div>
                        <div class="roadmap-features-item-description">
                            <p>Shifts – multiple volunteers working on one shift</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="roadmap-features-item">
                        <div class="roadmap-features-item-icon">
                            <i class="fa fa-th"></i>
                        </div>
                        <div class="roadmap-features-item-description">
                            <p>Availability for the volunteer to participate in more than one project</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="roadmap-features-item">
                        <div class="roadmap-features-item-icon">
                            <i class="fa fa-star-half-o"></i>
                        </div>
                        <div class="roadmap-features-item-description">
                            <p>Events & Schedule connectivity</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="share-your-ideas">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="share-your-ideas-text">
                        <h2 class="mb35">Share your ideas</h2>
                        <p>Drop us an email if you have your own idea for features to be included.</p>

                        <p><a class="mailto" href="mailto:info@aidspace.io"><strong>info@aidspace.io</strong></a></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="share-your-ideas-form">
                        <h2 class="mb35">Sign up for updates</h2>
                        <p>Interested in the new features we are working on lately? Sign up below.</p>

                        <div class="get-touch-wrapper-form">
                            <div class="get-touch-form">
                                <form id="aidspace-newsletter-1" class="yikes-easy-mc-form yikes-easy-mc-form-1"
                                      method="POST"
                                      action="https://aidspace.us12.list-manage.com/subscribe/post?u=aff9c8dceafd8565c394ad5ac&amp;id=18f774a4db"
                                      target="_blank">
                                    <label for="yikes-easy-mc-form-1-EMAIL"
                                           class="EMAIL-label yikes-mailchimp-field-required ">
                                        <!-- dictate label visibility -->
                                        <span class="EMAIL-label">Email address *</span>
                                        <!-- Description Above -->
                                        <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL"
                                               required="required">
                                        <!-- Description Below -->
                                    </label>

                                    <div id="mce-responses" class="clear">
                                        <div class="response" id="mce-error-response" style="display:none"></div>
                                        <div class="response" id="mce-success-response" style="display:none"></div>
                                    </div>
                                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                        <input type="text" name="b_aff9c8dceafd8565c394ad5ac_18f774a4db" tabindex="-1"
                                               value="">
                                    </div>

                                    <button type="submit"
                                            class="sign-up-button yikes-easy-mc-submit-button">
                                        <span class="yikes-mailchimp-submit-button-span-text">SUBSCRIBE</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
