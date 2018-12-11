@extends('layouts.master')

@section('meta')
    <title>FAQ - AidSpace</title>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="FAQ - AidSpace"/>
    <meta property="og:description"
          content="Helping organisations around the world managing their volunteers, communication and work schedules."/>
    <meta property="og:url" content="https://aidspace.io/faq/"/>
    <meta property="og:site_name" content="AidSpace"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="FAQ - AidSpace"/>
    <meta name="twitter:description"
          content="Helping organisations around the world managing their volunteers, communication and work schedules."/>
    <meta name="twitter:image" content="{{ asset('images/logo-new-website-retina.png') }}"/>
@endsection

@section('css')

@endsection

@section('content')

    <section class="wow fadeIn roadmap">
        <div class="intro-flex">
            <h1>Frequently Asked Questions</h1>
        </div>
    </section>

    <section class="faq-features">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="faq-features-item">
                        <div class="faq-features-item-heading">
                            <div class="faq-features-item-heading-icon">
                                <i class="fa fa-align-justify"></i>
                            </div>
                            <div class="faq-features-item-heading-text">
                                <p class="strong">General</p>
                            </div>
                        </div>

                        <div class="faq-features-answers-wrapper">
                            <p class="accordion">What is Adspace?</p>
                            <div class="panel"><span class="answer-symbol">A:</span>AidSpace is the not-for-profit
                                organisation behind the digital platform AidSpace.io The mission is the creation of
                                digital tools for other nonprofits, municipalities, charitable organisations,
                                foundations, religious groups, cooperatives and advocacies who involve volunteers and
                                need simplified workflow process.
                            </div>

                            <p class="accordion">Does it work on Windows and Mac?</p>
                            <div class="panel"><span class="answer-symbol">A:</span> Yes, our application are compatible
                                with both operating systems and their latest supported browsers.
                            </div>

                            <p class="accordion">What are the supported web browsers?</p>
                            <div class="panel"><span class="answer-symbol">A:</span> Microsoft Edge, IE, Mozilla
                                Firefox, Safari, Chrome, Opera in their developers’ latest versions.
                            </div>

                            <p class="accordion">May I apply for volunteer through AidSpace?</p>
                            <div class="panel"><span class="answer-symbol">A:</span> No. If you want to be a volunteer
                                you should contact your prefered organisation first. They will explain the process or
                                recruitment and make sure you are guided through.
                            </div>

                            <p class="accordion">For how long does the information stay on the system?</p>
                            <div class="panel"><span class="answer-symbol">A:</span> All of your information is
                                available on the system for as long as your organisation is active or until you manually
                                delete volunteers.
                            </div>

                            <p class="accordion">How many users can I register in the application?</p>
                            <div class="panel"><span class="answer-symbol">A:</span> The features in the package of
                                tools is the same for everyone and the number of users you pick and work with is
                                UNLIMITED.
                            </div>

                            <p class="accordion">How reliable, stable and safe is the platform?</p>
                            <div class="panel"><span class="answer-symbol">A:</span> Top level security is our priority.
                                All data is stored in a secure database, sensitive data is encrypted. We use
                                professional hosting providers like Amazon AWS and we are GDPR compliant.
                            </div>

                            <p class="accordion">Does AidSpace offer online support?</p>
                            <div class="panel"><span class="answer-symbol">A:</span> Yes we do, you can email us at any
                                time since our mission is to assist you with the questions you may have.
                            </div>

                            <p class="accordion">Is my data backed up and safe?</p>
                            <div class="panel"><span class="answer-symbol">A:</span> Totally – automated backups, SSL
                                encrypted data and only you can have access. Protection is equal to online banking
                                platforms hosted on secure database center.
                            </div>

                            <p class="accordion">AidSpace is adding new features - will those be available for me?</p>
                            <div class="panel"><span class="answer-symbol">A:</span> Yes, as the package is universal
                                for all users and if you want to use the new features they will be automatically
                                available to you as well.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="faq-features-item">
                        <div class="faq-features-item-heading">
                            <div class="faq-features-item-heading-icon">
                                <i class="fa fa-magic"></i>
                            </div>
                            <div class="faq-features-item-heading-text">
                                <p class="strong">The digital tool box</p>
                            </div>
                        </div>

                        <div class="faq-features-answers-wrapper">
                            <p class="accordion">Do I need to install a software?</p>
                            <div class="panel"><span class="answer-symbol">A:</span> No, AidSpace’s digital tools are at
                                your disposal online which means it is already a system in function and you can use it
                                at anytime and anywhere when you are connected to Internet.
                            </div>

                            <p class="accordion">Do users need training?</p>
                            <div class="panel"><span class="answer-symbol">A:</span> No training at all needed. Mainly
                                because we have developed a well illustrated Q&A help center and plan to apply special
                                walkthroughs that will be guiding you every step of the way. But most of all – the
                                applications are user-friendly and so simplified.
                            </div>

                            <p class="accordion">Is support available only through email?</p>
                            <div class="panel"><span class="answer-symbol">A:</span> Not only via email, we can always
                                schedule a call to be of your help.
                            </div>

                            <p class="accordion">Can the tools be embedded on my organisation's website entirely?</p>
                            <div class="panel"><span class="answer-symbol">A:</span> Contact us to discuss in detail at
                                <a class="mailto" href="mailto:info@aidspace.io">info@aidspace.io</a></div>

                            <p class="accordion">Can we import the information from our current database?</p>
                            <div class="panel"><span class="answer-symbol">A:</span> Yes, you can.</div>

                            <p class="accordion">Can I request a new feature?</p>
                            <div class="panel"><span class="answer-symbol">A:</span> Of course – feel free to contact us at info@aidspace.io and share your need or idea.</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="faq-features-item">
                        <div class="faq-features-item-heading">
                            <div class="faq-features-item-heading-icon">
                                <i class="fa fa-list-alt" aria-hidden="true"></i>
                            </div>
                            <div class="faq-features-item-heading-text">
                                <p class="strong">Subscriptions</p>
                            </div>
                        </div>

                        <div class="faq-features-answers-wrapper">
                            <p class="accordion">How do I subscribe my organisation?</p>
                            <div class="panel"><span class="answer-symbol">A:</span> It is again very simple process – go to https://volunteers.aidspace.io/signup and register your organisation.</div>

                            <p class="accordion">How long would it take to set up my organisation?</p>
                            <div class="panel"><span class="answer-symbol">A:</span> Only a few seconds.</div>

                            <p class="accordion">I am not confident/convinced that I should sign up – is there a free trial?</p>
                            <div class="panel"><span class="answer-symbol">A:</span> Yes there is a free trial. Contact us at <a class="mailto" href="mailto:info@aidspace.io">info@aidspace.io</a> to find out more.</div>

                            <p class="accordion">Can we start without the trial?</p>
                            <div class="panel"><span class="answer-symbol">A:</span> A trial is to present our set of digital tools and try it in real environment. Please contact us at <a class="mailto" href="mailto:info@aidspace.io">info@aidspace.io</a> to claim your package and pricing.</div>

                            <p class="accordion">Our activities are seasonal – how would this work for us?</p>
                            <div class="panel"><span class="answer-symbol">A:</span> Our flexible pricing allows different options – share your needs with us at <a class="mailto" href="mailto:info@aidspace.io">info@aidspace.io</a> and we will provide the best offer.</div>

                            <p class="accordion">How much would it cost me to use your tools?</p>
                            <div class="panel"><span class="answer-symbol">A:</span> There is a monthly fee for the application and a fee per active user. Depending on your organisation’s location you can email us at info@aidspace.io to get the pricing for your country.</div>

                            <p class="accordion">What is included in my monthly fee service?</p>
                            <div class="panel"><span class="answer-symbol">A:</span> That fee covers the features you are using and the support you request from us, the secure storage of all data you enter and privacy of you and your users, compliant to GDPR and our policy.</div>

                            <p class="accordion">Do I subscribe for all the digital tools or just the one(s) I need?</p>
                            <div class="panel"><span class="answer-symbol">A:</span> You subscribe separately for each of the three tools in the box. The features in those tools you use accordingly your requirements.</div>

                            <p class="accordion">Are there non-profit discounts?</p>
                            <div class="panel"><span class="answer-symbol">A:</span> For further information, please contact us at <a class="mailto" href="mailto:info@aidspace.io">info@aidspace.io</a></div>

                            <p class="accordion">When do I pay?</p>
                            <div class="panel"><span class="answer-symbol">A:</span> No there aren’t any. You only pay your monthly subscription and the fee per active user.</div>

                            <p class="accordion">How do I pay?</p>
                            <div class="panel"><span class="answer-symbol">A:</span> You will be sent an invoice based on your subscription – monthly or yearly. Then you pay by bank transfer.</div>

                            <p class="accordion">Are there any licensing fees?</p>
                            <div class="panel"><span class="answer-symbol">A:</span> No there aren’t any. You only pay your monthly subscription and the fee per active user.</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="faq-features-item">
                        <div class="faq-features-item-heading">
                            <div class="faq-features-item-heading-icon">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </div>
                            <div class="faq-features-item-heading-text">
                                <p class="strong">Privacy concerns</p>
                            </div>
                        </div>

                        <div class="faq-features-answers-wrapper">
                            <p class="accordion">If I subscribe for shorter term will my data be kept afterwards?</p>
                            <div class="panel"><span class="answer-symbol">A:</span> For a certain period of time – yes, in order to allow you to download it. Before the time runs out we will remind you what is the next step.</div>

                            <p class="accordion">Who has access to my information and my organisation's information?</p>
                            <div class="panel"><span class="answer-symbol">A:</span> Only you and when needed our support team to assist you better.</div>

                            <p class="accordion">What is GDPR and is the product compliant?</p>
                            <div class="panel"><span class="answer-symbol">A:</span> This is a regulation for general data protection issued by the EU Government and the EU Council. Its main purpose is to provide the citizens control over their private data. Unlike the previous version, the current reglamentation expands the scope of the definition of personal data, implies severe requirements to administrators like our organisation.</div>

                            <p class="accordion">Can AidSpace view my data?</p>
                            <div class="panel"><span class="answer-symbol">A:</span> Only during providing support from our team and we do not disclose or use your info to third parties because we cherish you enough to obey the laws.</div>

                            <p class="accordion">How do I get a copy of all my data if I am not using the application any more?</p>
                            <div class="panel"><span class="answer-symbol">A:</span> Contact us at <a class="mailto" href="mailto:info@aidspace.io">info@aidspace.io</a> and we will provide you with all the information you need.</div>

                            <p class="accordion">How often is your database backed up?</p>
                            <div class="panel"><span class="answer-symbol">A:</span> There are daily backups and they are kept for 15 days back in time.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        /* Toggle between adding and removing the "active" and "show" classes when the user clicks on one of the "Section" buttons. The "active" class is used to add a background color to the current button when its belonging panel is open. The "show" class is used to open the specific accordion panel */
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].onclick = function () {
                this.classList.toggle("active");
                this.nextElementSibling.classList.toggle("show");
            };
        }

    </script>
@endsection
