@extends('layouts.master')

@section('meta')
    <title>How it works - AidSpace</title>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="How it works - AidSpace"/>
    <meta property="og:description"
          content="Helping organisations around the world managing their volunteers, communication and work schedules."/>
    <meta property="og:url" content="https://aidspace.io/how-it-works/"/>
    <meta property="og:site_name" content="AidSpace"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="How it works - AidSpace"/>
    <meta name="twitter:description"
          content="Helping organisations around the world managing their volunteers, communication and work schedules."/>
    <meta name="twitter:image" content="{{ asset('images/logo-new-website-retina.png') }}"/>
@endsection

@section('css')

@endsection

@section('content')
    <section class="wow fadeIn roadmap how-it-works-page">
        <div class="intro-flex">
            <h1>How it works</h1>

            <h3><strong><span>Administrators and Coordinators</span></strong></h3>
        </div>
    </section>

    <section class="latest-features" id="how-it-works-features">
        <div class="container">
            <div class="wrapper-latest-features-content">
                <div class="tab">
                    <button href="#" class="tab-item tablinks" onclick="openTabs(event, 'MyProfile')" id="defaultOpen">
                        My profile
                    </button>

                    <button href="#" class="tab-item tablinks" onclick="openTabs(event, 'Dashboard')">
                        Dashboard
                    </button>

                    <button href="#" class="tab-item tablinks" onclick="openTabs(event, 'Volunteers')">
                        Volunteers
                    </button>

                    <button href="#" class="tab-item tablinks" onclick="openTabs(event, 'AdvancedSearch')">
                        Advanced search
                    </button>

                    <button href="#" class="tab-item tablinks" onclick="openTabs(event, 'Messages')">
                        Messages
                    </button>

                    <button href="#" class="tab-item tablinks" onclick="openTabs(event, 'Reports')">
                        Reports
                    </button>

                    <button href="#" class="tab-item tablinks" onclick="openTabs(event, 'Schedule')">
                        Schedule
                    </button>

                    <button href="#" class="tab-item tablinks" onclick="openTabs(event, 'Events')">
                        Events
                    </button>

                    <button href="#" class="tab-item tablinks" onclick="openTabs(event, 'Settings')">
                        Settings
                    </button>
                </div>

                <div id="MyProfile" class="tabcontent">
                    <p><strong>Choose different options for your own profile.</strong></p>
                    <p><span style="font-weight: 400;">Click on the profile image on top right of yor screen</span><span
                            style="font-weight: 400;">&nbsp;and from the menu choose My profile.</span></p>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="318"
                             src="https://aidspace.io/wp-content/uploads/2018/10/My-profie-1024x318.png"
                             class="vc_single_image-img attachment-large"
                             alt="volunteer administrator, coordinator, tutorials, my profile administrator coordinator"
                             srcset="https://aidspace.io/wp-content/uploads/2018/10/My-profie-1024x318.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/My-profie-300x93.png 300w, https://aidspace.io/wp-content/uploads/2018/10/My-profie-768x239.png 768w, https://aidspace.io/wp-content/uploads/2018/10/My-profie-600x186.png 600w"
                             sizes="(max-width: 1024px) 100vw, 1024px">
                    </div>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="307"
                             src="https://aidspace.io/wp-content/uploads/2018/10/my-profile-2-1024x307.png"
                             class="vc_single_image-img attachment-large"
                             alt="volunteer administrator, coordinator, tutorials, my profile administrator coordinator"
                             srcset="https://aidspace.io/wp-content/uploads/2018/10/my-profile-2-1024x307.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/my-profile-2-300x90.png 300w, https://aidspace.io/wp-content/uploads/2018/10/my-profile-2-768x230.png 768w, https://aidspace.io/wp-content/uploads/2018/10/my-profile-2-600x180.png 600w"
                             sizes="(max-width: 1024px) 100vw, 1024px">
                    </div>

                    <ol>
                        <li style="font-weight: 400;"><span style="font-weight: 400;">Edit my profile – </span>
                            <ul>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Change your current password or </span><span
                                        style="font-weight: 400;">assign yourself to a group (or all groups) and area (or all areas).</span>
                                </li>
                            </ul>
                        </li>
                    </ol>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="875" height="815"
                             src="https://aidspace.io/wp-content/uploads/2018/10/my-profile-3.png"
                             class="vc_single_image-img attachment-large"
                             alt="volunteer administrator, coordinator, tutorials, settings module, edit user"
                             srcset="https://aidspace.io/wp-content/uploads/2018/10/my-profile-3.png 875w, https://aidspace.io/wp-content/uploads/2018/10/my-profile-3-300x279.png 300w, https://aidspace.io/wp-content/uploads/2018/10/my-profile-3-768x715.png 768w, https://aidspace.io/wp-content/uploads/2018/10/my-profile-3-600x559.png 600w"
                             sizes="(max-width: 875px) 100vw, 875px">
                    </div>

                    <ul>
                        <li style="font-weight: 400;"><span style="font-weight: 400;">If you are to be responsible for all volunteers in the organisation in many matters and occasions scroll down to the bottom of the pop up and check &nbsp;“Can see all volunteers”. This is how it should look like once you chose the option</span><span
                                style="font-weight: 400;">. &nbsp;This could help you assign a volunteer that does not belong to a certain group or area to a shift or task.</span>
                        </li>
                    </ul>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="870" height="807"
                             src="https://aidspace.io/wp-content/uploads/2018/10/my-profile-4.png"
                             class="vc_single_image-img attachment-large"
                             alt="volunteer administrator, coordinator, tutorials, settings module, edit user"
                             srcset="https://aidspace.io/wp-content/uploads/2018/10/my-profile-4.png 870w, https://aidspace.io/wp-content/uploads/2018/10/my-profile-4-300x278.png 300w, https://aidspace.io/wp-content/uploads/2018/10/my-profile-4-768x712.png 768w, https://aidspace.io/wp-content/uploads/2018/10/my-profile-4-600x557.png 600w"
                             sizes="(max-width: 870px) 100vw, 870px">
                    </div>

                    <p><span style="font-weight: 400;">&nbsp; &nbsp; &nbsp; 2. Change role. </span><span
                            style="font-weight: 400;">If you are an administrator you cannot change your status to coordinator. If circumstances require such action please contact us at </span><span
                            style="text-decoration: underline;"><a href="mailto:info@aidspace.io"><span
                                    style="font-weight: 400;">info@aidspace.io</span></a></span><span
                            style="font-weight: 400;"> and provide us with information on the request. </span></p>


                </div>

                <div id="Dashboard" class="tabcontent">
                    <p><strong>Organizes and presents information in an easy to read manner. A way to communicate and
                            give your users up-to-date information. Dashboard is the first page that loads on your
                            screen once you log in.</strong></p>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="482"
                             src="https://aidspace.io/wp-content/uploads/2018/10/dashboard-1-1024x482.png"
                             class="vc_single_image-img attachment-large" alt="dashboard module, tutorials,"
                             srcset="https://aidspace.io/wp-content/uploads/2018/10/dashboard-1-1024x482.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/dashboard-1-300x141.png 300w, https://aidspace.io/wp-content/uploads/2018/10/dashboard-1-768x362.png 768w, https://aidspace.io/wp-content/uploads/2018/10/dashboard-1-600x283.png 600w"
                             sizes="(max-width: 1024px) 100vw, 1024px">
                    </div>

                    <p><span style="font-weight: 400;">Create new post. – Click “+” button</span><span
                            style="font-weight: 400;">&nbsp;and a pop up will appear. Fill the required fields Title and Message. Depending on the message you want the users to read you can allow or disable comments. Click “Save” to publish your post.</span>
                    </p>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="968" height="490"
                             src="https://aidspace.io/wp-content/uploads/2018/10/dashboard-2.png"
                             class="vc_single_image-img attachment-large"
                             alt="dashboard module, tutorials, create new post, disable comments, allow comments"
                             srcset="https://aidspace.io/wp-content/uploads/2018/10/dashboard-2.png 968w, https://aidspace.io/wp-content/uploads/2018/10/dashboard-2-300x152.png 300w, https://aidspace.io/wp-content/uploads/2018/10/dashboard-2-768x389.png 768w, https://aidspace.io/wp-content/uploads/2018/10/dashboard-2-600x304.png 600w"
                             sizes="(max-width: 968px) 100vw, 968px">
                    </div>

                    <p>This is how a post with “Disable comments” function look like:</p>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="187"
                             src="https://aidspace.io/wp-content/uploads/2018/10/dashboard-3-1024x187.png"
                             class="vc_single_image-img attachment-large"
                             alt="Dashboard, new comment, tutorials, volunteer"
                             srcset="https://aidspace.io/wp-content/uploads/2018/10/dashboard-3-1024x187.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/dashboard-3-300x55.png 300w, https://aidspace.io/wp-content/uploads/2018/10/dashboard-3-768x140.png 768w, https://aidspace.io/wp-content/uploads/2018/10/dashboard-3-600x110.png 600w"
                             sizes="(max-width: 1024px) 100vw, 1024px">
                    </div>

                    <p><span style="font-weight: 400;">Comment on post: Click on Comments filed&nbsp;</span><span
                            style="font-weight: 400;">and the post will open with text area where you can type your comments and click “Send”.</span>
                    </p>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="140"
                             src="https://aidspace.io/wp-content/uploads/2018/10/dashboard-4-1024x140.png"
                             class="vc_single_image-img attachment-large"
                             alt="Dashboard, new comment, tutorials, volunteer"
                             srcset="https://aidspace.io/wp-content/uploads/2018/10/dashboard-4-1024x140.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/dashboard-4-300x41.png 300w, https://aidspace.io/wp-content/uploads/2018/10/dashboard-4-768x105.png 768w, https://aidspace.io/wp-content/uploads/2018/10/dashboard-4-600x82.png 600w"
                             sizes="(max-width: 1024px) 100vw, 1024px">
                    </div>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="232"
                             src="https://aidspace.io/wp-content/uploads/2018/10/dashboard-5-1024x232.png"
                             class="vc_single_image-img attachment-large"
                             alt="Dashboard, new comment, tutorials, volunteer"
                             srcset="https://aidspace.io/wp-content/uploads/2018/10/dashboard-5-1024x232.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/dashboard-5-300x68.png 300w, https://aidspace.io/wp-content/uploads/2018/10/dashboard-5-768x174.png 768w, https://aidspace.io/wp-content/uploads/2018/10/dashboard-5-600x136.png 600w"
                             sizes="(max-width: 1024px) 100vw, 1024px">
                    </div>

                    <ul>
                        <li><span style="font-weight: 400;">Can I attach files on my Posts? – No. This is not an option yet. We will let you know when you are able to do that. </span>
                        </li>
                        <li><span style="font-weight: 400;">Can a volunteer create posts? – No. Only the administrators and coordinators can do that. The volunteer can only comment on posts. </span>
                        </li>
                        <li><span style="font-weight: 400;">How can I edit my posts? – This is not an option yet. We will let you know when you are able to do that. </span>
                        </li>
                        <li><span style="font-weight: 400;">How can I delete my posts? – This is not an option yet. We will let you know when you are able to do that.</span>
                        </li>
                        <li><span style="font-weight: 400;">When I published a post will it automatically be shown to all users? – Yes, to all users. </span>
                        </li>
                        <li><span style="font-weight: 400;">What can I share in my posts? – All useful or important information concerning the activities of your organisation.&nbsp;</span>
                        </li>
                    </ul>
                </div>

                <div id="Volunteers" class="tabcontent">
                    <p><strong>Handle volunteer profiles with all the information – add and edit or remove, or
                            deactivate.&nbsp;</strong></p>

                    <p><span style="font-weight: 400;">1. List. List with all of your volunteers. Quick search option and option to hide all inactive volunteers.</span><span
                            style="font-weight: 400;">&nbsp;The list with all volunteers including inactive and deleted.</span>
                    </p>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="523"
                             src="https://aidspace.io/wp-content/uploads/2018/10/volunteers-1-1024x523.png"
                             class="vc_single_image-img attachment-large"
                             alt="volunteer administrator, coordinator, tutorials, ative volunteers"
                             srcset="https://aidspace.io/wp-content/uploads/2018/10/volunteers-1-1024x523.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-1-300x153.png 300w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-1-768x392.png 768w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-1-600x306.png 600w"
                             sizes="(max-width: 1024px) 100vw, 1024px">
                    </div>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1633" height="837"
                             src="https://aidspace.io/wp-content/uploads/2018/10/scheduling-module-2.png"
                             class="vc_single_image-img attachment-full"
                             alt="List of volnteers and their assignments in Schedule module"
                             srcset="https://aidspace.io/wp-content/uploads/2018/10/scheduling-module-2.png 1633w, https://aidspace.io/wp-content/uploads/2018/10/scheduling-module-2-300x154.png 300w, https://aidspace.io/wp-content/uploads/2018/10/scheduling-module-2-768x394.png 768w, https://aidspace.io/wp-content/uploads/2018/10/scheduling-module-2-1024x525.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/scheduling-module-2-600x308.png 600w"
                             sizes="(max-width: 1633px) 100vw, 1633px">
                    </div>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="516"
                             src="https://aidspace.io/wp-content/uploads/2018/10/volunteers-2-1024x516.png"
                             class="vc_single_image-img attachment-large"
                             alt="volunteer administrator, coordinator, tutorials, edit profile, active and inactive volunteers"
                             srcset="https://aidspace.io/wp-content/uploads/2018/10/volunteers-2-1024x516.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-2-300x151.png 300w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-2-768x387.png 768w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-2-600x302.png 600w"
                             sizes="(max-width: 1024px) 100vw, 1024px">
                    </div>

                    <ul>
                        <li style="font-weight: 400;"><span style="font-weight: 400;">The list includes data as contact email, phone number, country, availability of the volunteer and their status. You can choose to arrange them according their names, emails, country or status in ascending or descending order. </span>
                        </li>
                        <li style="font-weight: 400;"><span style="font-weight: 400;">To go through the profile of the volunteer and edit, press on the grey field that appears when you scroll over the list.&nbsp;</span>
                        </li>
                        <li style="font-weight: 400;"><span style="font-weight: 400;">Quick options menu allow you to delete, export data or inactivate the person from the system.&nbsp;</span>
                        </li>
                    </ul>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="512"
                             src="https://aidspace.io/wp-content/uploads/2018/10/volunteers-3-1024x512.png"
                             class="vc_single_image-img attachment-large"
                             alt="volunteer administrator, coordinator, tutorials, edit profile"
                             srcset="https://aidspace.io/wp-content/uploads/2018/10/volunteers-3-1024x512.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-3-300x150.png 300w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-3-768x384.png 768w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-3-600x300.png 600w"
                             sizes="(max-width: 1024px) 100vw, 1024px">
                    </div>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="375"
                             src="https://aidspace.io/wp-content/uploads/2018/10/volunteers-4-1024x375.png"
                             class="vc_single_image-img attachment-large"
                             alt="volunteer administrator, coordinator, tutorials, options to manage volunteer profile data"
                             srcset="https://aidspace.io/wp-content/uploads/2018/10/volunteers-4-1024x375.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-4-300x110.png 300w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-4-768x281.png 768w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-4-600x220.png 600w"
                             sizes="(max-width: 1024px) 100vw, 1024px">
                    </div>

                    <p><span style="font-weight: 400;">2. Create new volunteer. </span></p>

                    <ul>
                        <li style="font-weight: 400;"><span style="font-weight: 400;">Press “+”button. A pop up appears with your form. </span>
                        </li>
                        <li style="font-weight: 400;"><span style="font-weight: 400;">Profile picture – Add their profile picture from the top left icon to upload and mind the requirements on size: max.5 mb.; width 150px and height 150px.&nbsp;</span>
                        </li>
                    </ul>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="626"
                             src="https://aidspace.io/wp-content/uploads/2018/10/volunteers-5-1024x626.png"
                             class="vc_single_image-img attachment-large"
                             alt="volunteer administrator, coordinator, tutorials, volunteer profile tab, profile picture"
                             srcset="https://aidspace.io/wp-content/uploads/2018/10/volunteers-5-1024x626.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-5-300x184.png 300w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-5-768x470.png 768w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-5-600x367.png 600w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-5.png 1373w"
                             sizes="(max-width: 1024px) 100vw, 1024px">
                    </div>

                    <ul>
                        <li style="font-weight: 400;"><span style="font-weight: 400;">Profile section. Insert personal info for the volunteer as names, birthday and registration email (those are required and you won’t be able to complete the new profile without them). Once you entered the required data and saved it, &nbsp;next to the volunteer’s email address or phone number you will notice new icons: Delete, Send verification email and See history.&nbsp;</span>
                            <ul>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">In order the correct notification process – you must have their email or phone number confirmed and allow them to pick the way they want to receive notifications – via emails or SMS. </span>
                                </li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Birthdays/ Anniversaries – you will automatically receive notification so you won’t miss them three months before the event. </span>
                                </li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Criminal record/ Child certificate – you will receive automated notifications three months before the expiry date.</span>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="626"
                             src="https://aidspace.io/wp-content/uploads/2018/10/volunteers-5-1024x626.png"
                             class="vc_single_image-img attachment-large"
                             alt="volunteer administrator, coordinator, tutorials, volunteer profile tab, profile picture"
                             srcset="https://aidspace.io/wp-content/uploads/2018/10/volunteers-5-1024x626.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-5-300x184.png 300w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-5-768x470.png 768w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-5-600x367.png 600w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-5.png 1373w"
                             sizes="(max-width: 1024px) 100vw, 1024px">
                    </div>

                    <ul>
                        <li><span style="font-weight: 400;">See history is available for you to follow the changes in the profile and the person who inserted them (the volunteer, the coordinator or the administrator).</span>
                        </li>
                    </ul>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="613"
                             src="https://aidspace.io/wp-content/uploads/2018/10/volunteers-7-1024x613.png"
                             class="vc_single_image-img attachment-large"
                             alt="volunteer administrator, coordinator, volunteer profile"
                             srcset="https://aidspace.io/wp-content/uploads/2018/10/volunteers-7-1024x613.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-7-300x180.png 300w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-7-768x460.png 768w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-7-600x359.png 600w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-7.png 1392w"
                             sizes="(max-width: 1024px) 100vw, 1024px">
                    </div>

                    <ul>
                        <li><span style="font-weight: 400;">Education, Skills and Languages –&nbsp;</span><span
                                style="font-weight: 400;">add accordingly one or more.</span></li>
                    </ul>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="625"
                             src="https://aidspace.io/wp-content/uploads/2018/10/volunteers-8-1024x625.png"
                             class="vc_single_image-img attachment-large"
                             alt="volunteer administrator, coordinator, tutorials, education, skills and languages tab"
                             srcset="https://aidspace.io/wp-content/uploads/2018/10/volunteers-8-1024x625.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-8-300x183.png 300w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-8-768x469.png 768w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-8-600x366.png 600w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-8.png 1333w"
                             sizes="(max-width: 1024px) 100vw, 1024px">
                    </div>

                    <ul>
                        <li><span style="font-weight: 400;">Work.&nbsp;</span><span style="font-weight: 400;">In this section you can insert data on the volunteers current or past activities in the organisation and some very important details such as their reason for leaving the position.&nbsp;</span>
                        </li>
                    </ul>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="624"
                             src="https://aidspace.io/wp-content/uploads/2018/10/volunteers-9-1024x624.png"
                             class="vc_single_image-img attachment-large"
                             alt="volunteer administrator, coordinator, tutorials, work experience tab"
                             srcset="https://aidspace.io/wp-content/uploads/2018/10/volunteers-9-1024x624.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-9-300x183.png 300w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-9-768x468.png 768w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-9-600x365.png 600w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-9.png 1327w"
                             sizes="(max-width: 1024px) 100vw, 1024px">
                    </div>

                    <ul>
                        <li><span style="font-weight: 400;">Documents. </span><span style="font-weight: 400;">Upload all required documents.&nbsp;</span>
                        </li>
                    </ul>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="623"
                             src="https://aidspace.io/wp-content/uploads/2018/10/volunteers-10-1024x623.png"
                             class="vc_single_image-img attachment-large"
                             alt="volunteer administrator, coordinator, tutorials, documents tab"
                             srcset="https://aidspace.io/wp-content/uploads/2018/10/volunteers-10-1024x623.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-10-300x182.png 300w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-10-768x467.png 768w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-10-600x365.png 600w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-10.png 1330w"
                             sizes="(max-width: 1024px) 100vw, 1024px">
                    </div>

                    <ul>
                        <li><span style="font-weight: 400;">Equipment. </span><span style="font-weight: 400;">Sometimes organisations provide materials in order to ensure the volunteers performance.</span>
                        </li>
                    </ul>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="613"
                             src="https://aidspace.io/wp-content/uploads/2018/10/volunteers-11-1024x613.png"
                             class="vc_single_image-img attachment-large"
                             alt="volunteer administrator, equipment tab, equipment for the volunteer"
                             srcset="https://aidspace.io/wp-content/uploads/2018/10/volunteers-11-1024x613.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-11-300x180.png 300w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-11-768x460.png 768w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-11-600x359.png 600w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-11.png 1329w"
                             sizes="(max-width: 1024px) 100vw, 1024px">
                    </div>

                    <ul>
                        <li><span style="font-weight: 400;">Availability.&nbsp;</span><span style="font-weight: 400;">You can enter yourself the volunteers availability. (They can do that themselves from their own profile).&nbsp;</span>
                            <ul>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Enter their availability – click “Add” button </span><span
                                        style="font-weight: 400;">&nbsp;– click “Save” on the pop up and then “Save”on the initial pop up window. You can easily fix a wrongfully entered availability just using drag and drop.&nbsp;</span>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="627"
                             src="https://aidspace.io/wp-content/uploads/2018/10/volunteers-12-1024x627.png"
                             class="vc_single_image-img attachment-large"
                             alt="volunteer availability, manage volunteer availability"
                             srcset="https://aidspace.io/wp-content/uploads/2018/10/volunteers-12-1024x627.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-12-300x184.png 300w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-12-768x470.png 768w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-12-600x368.png 600w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-12.png 1332w"
                             sizes="(max-width: 1024px) 100vw, 1024px">
                    </div>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="626"
                             src="https://aidspace.io/wp-content/uploads/2018/10/volunteers-13-1024x626.png"
                             class="vc_single_image-img attachment-large"
                             alt="volunteer availability, availability of the volunteer"
                             srcset="https://aidspace.io/wp-content/uploads/2018/10/volunteers-13-1024x626.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-13-300x183.png 300w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-13-768x470.png 768w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-13-600x367.png 600w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-13.png 1346w"
                             sizes="(max-width: 1024px) 100vw, 1024px">
                    </div>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="619"
                             src="https://aidspace.io/wp-content/uploads/2018/10/volunteers-14-1024x619.png"
                             class="vc_single_image-img attachment-large"
                             alt="volunteer availability, manage volunteer availability"
                             srcset="https://aidspace.io/wp-content/uploads/2018/10/volunteers-14-1024x619.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-14-300x181.png 300w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-14-768x464.png 768w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-14-600x363.png 600w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-14.png 1343w"
                             sizes="(max-width: 1024px) 100vw, 1024px">l
                    </div>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="622"
                             src="https://aidspace.io/wp-content/uploads/2018/10/volunteers-15-1024x622.png"
                             class="vc_single_image-img attachment-large"
                             alt="volunteer availability, manage volunteer availability"
                             srcset="https://aidspace.io/wp-content/uploads/2018/10/volunteers-15-1024x622.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-15-300x182.png 300w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-15-768x467.png 768w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-15-600x364.png 600w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-15.png 1335w"
                             sizes="(max-width: 1024px) 100vw, 1024px">
                    </div>

                    <p><span style="font-weight: 400;">3. When you have entered all the information either separately or at once always press Save to keep the information stored. Press the additional menu options to Delete or Export all data to perform the corresponding actions. </span>
                    </p>
                    <p><span style="font-weight: 400;">4. Edit volunteer profile. To edit the profile of the volunteer, press on the grey field that appears when you scroll over the list. Follow the same steps as creating, instead this time you will remove or add new details. </span>
                    </p>
                    <ul>
                        <li style="font-weight: 400;"><span style="font-weight: 400;">Use “See history” icons to follow up with the changes you have made so far.&nbsp;</span>
                        </li>
                    </ul>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="623"
                             src="https://aidspace.io/wp-content/uploads/2018/10/volunteers-16-1024x623.png"
                             class="vc_single_image-img attachment-large" alt="volunteer profile, tutorials see history"
                             srcset="https://aidspace.io/wp-content/uploads/2018/10/volunteers-16-1024x623.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-16-300x183.png 300w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-16-768x467.png 768w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-16-600x365.png 600w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-16.png 1333w"
                             sizes="(max-width: 1024px) 100vw, 1024px">
                    </div>
                </div>

                <div id="AdvancedSearch" class="tabcontent">
                    <p><strong>Search a volunteer on a number of criteria.</strong></p>
                    <p><span
                            style="font-weight: 400;">There are two ways to access the advanced search module: </span>
                    </p>
                    <p><span style="font-weight: 400;">When you look through the list of volunteers and you want to perform more detailed research on top right side, next to the quick search field there is a button “Advanced search”.</span>
                    </p>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="613"
                             src="https://aidspace.io/wp-content/uploads/2018/10/advanced-search-2-1024x613.png"
                             class="vc_single_image-img attachment-large"
                             alt="volunteer administrator, coordinator, advanced search"
                             srcset="https://aidspace.io/wp-content/uploads/2018/10/advanced-search-2-1024x613.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/advanced-search-2-300x180.png 300w, https://aidspace.io/wp-content/uploads/2018/10/advanced-search-2-768x460.png 768w, https://aidspace.io/wp-content/uploads/2018/10/advanced-search-2-600x359.png 600w"
                             sizes="(max-width: 1024px) 100vw, 1024px">
                    </div>

                    <p><span
                            style="font-weight: 400;">There is also a section on the main menu on the left sidebar. </span>
                    </p>
                    <p><span style="font-weight: 400;">1. We have created this entire section to allow you to search candidates by different criteria. For your convenience you also have options to</span><span
                            style="font-weight: 400;">:</span></p>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="613"
                             src="https://aidspace.io/wp-content/uploads/2018/10/advanced-search-2-1024x613.png"
                             class="vc_single_image-img attachment-large"
                             alt="volunteer administrator, coordinator, advanced search"
                             srcset="https://aidspace.io/wp-content/uploads/2018/10/advanced-search-2-1024x613.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/advanced-search-2-300x180.png 300w, https://aidspace.io/wp-content/uploads/2018/10/advanced-search-2-768x460.png 768w, https://aidspace.io/wp-content/uploads/2018/10/advanced-search-2-600x359.png 600w"
                             sizes="(max-width: 1024px) 100vw, 1024px">
                    </div>

                    <ul>
                        <li><span style="font-weight: 400;">Send message to all – if all the candidates match your expectation you can message all of them using Messages module. Press that button and you will automatically be transferred to the Messages module to write a new message. </span><span
                                style="font-weight: 400;">If you decide you want to had pick volunteer to receive your message click on the field with their names and drop down will appear.</span>
                        </li>
                    </ul>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="587"
                             src="https://aidspace.io/wp-content/uploads/2018/10/advanced-search-3-1024x587.png"
                             class="vc_single_image-img attachment-large"
                             alt="volunteers administrator, coordinator, tutorials, new message"
                             srcset="https://aidspace.io/wp-content/uploads/2018/10/advanced-search-3-1024x587.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/advanced-search-3-300x172.png 300w, https://aidspace.io/wp-content/uploads/2018/10/advanced-search-3-768x440.png 768w, https://aidspace.io/wp-content/uploads/2018/10/advanced-search-3-600x344.png 600w"
                             sizes="(max-width: 1024px) 100vw, 1024px">
                    </div>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="579"
                             src="https://aidspace.io/wp-content/uploads/2018/10/advanced-search-4-1024x579.png"
                             class="vc_single_image-img attachment-large"
                             alt="volunteer administrator, coordinator, tutorials, messages module, choose recipients, new message"
                             srcset="https://aidspace.io/wp-content/uploads/2018/10/advanced-search-4-1024x579.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/advanced-search-4-300x170.png 300w, https://aidspace.io/wp-content/uploads/2018/10/advanced-search-4-768x434.png 768w, https://aidspace.io/wp-content/uploads/2018/10/advanced-search-4-600x339.png 600w"
                             sizes="(max-width: 1024px) 100vw, 1024px">
                    </div>

                    <ul>
                        <li><span style="font-weight: 400;">Three additional options to export the results in different formats if needed.</span>
                        </li>
                    </ul>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="512"
                             src="https://aidspace.io/wp-content/uploads/2018/10/advanced-search-5-1024x512.png"
                             class="vc_single_image-img attachment-large"
                             alt="volunteer administrator, coordinator, tutorials, volunteer list export options"
                             srcset="https://aidspace.io/wp-content/uploads/2018/10/advanced-search-5-1024x512.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/advanced-search-5-300x150.png 300w, https://aidspace.io/wp-content/uploads/2018/10/advanced-search-5-768x384.png 768w, https://aidspace.io/wp-content/uploads/2018/10/advanced-search-5-600x300.png 600w"
                             sizes="(max-width: 1024px) 100vw, 1024px">
                    </div>

                    <ul>
                        <li style="list-style-type: none;">
                            <ul>
                                <li style="list-style-type: none;">
                                    <ul>
                                        <li><span style="font-weight: 400;">Note: Skills and Languages fields in volunteer profiles must be filled in order to have every single skill and language in the search options. If you don’t fill them you will see this note:</span>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="476"
                             src="https://aidspace.io/wp-content/uploads/2018/10/advanced-search-6-1024x476.png"
                             class="vc_single_image-img attachment-large"
                             alt="volunteer administrator, coordinator, tutorials, advanced search, no data available"
                             srcset="https://aidspace.io/wp-content/uploads/2018/10/advanced-search-6-1024x476.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/advanced-search-6-300x139.png 300w, https://aidspace.io/wp-content/uploads/2018/10/advanced-search-6-768x357.png 768w, https://aidspace.io/wp-content/uploads/2018/10/advanced-search-6-600x279.png 600w"
                             sizes="(max-width: 1024px) 100vw, 1024px">
                    </div>
                </div>

                <div id="Messages" class="tabcontent">
                    <p><strong>Exchange emails with your fellow coordinators and administrators, share important
                            information inside the app with volunteers.</strong></p>
                    <p><span style="font-weight: 400;">This is your inbox:</span></p>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="511"
                             src="https://aidspace.io/wp-content/uploads/2018/10/messages-1-1024x511.png"
                             class="vc_single_image-img attachment-large"
                             alt="volunteer administrator, coordinator, messages module"
                             srcset="https://aidspace.io/wp-content/uploads/2018/10/messages-1-1024x511.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/messages-1-300x150.png 300w, https://aidspace.io/wp-content/uploads/2018/10/messages-1-768x383.png 768w, https://aidspace.io/wp-content/uploads/2018/10/messages-1-600x299.png 600w"
                             sizes="(max-width: 1024px) 100vw, 1024px">
                    </div>

                    <ol>
                        <li><span style="font-weight: 400;">Create new message. </span></li>
                    </ol>

                    <ul>
                        <li style="font-weight: 400;"><span style="font-weight: 400;">Press “+” button. A pop up appears with many useful options.&nbsp;</span>
                            <ul>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Send a message to all active volunteers or include inactive as well. Note: when you personally want to address a volunteer do not switch the button on because your message will be automatically sent to all active volunteers as well. </span>
                                </li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Select groups for your message</span>
                                </li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Select areas </span></li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Select volunteers – personalize your message </span>
                                </li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Send a copy to your coordinator or fellow coordinators and administrator</span>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="691"
                             src="https://aidspace.io/wp-content/uploads/2018/10/messages-2-1024x691.png"
                             class="vc_single_image-img attachment-large"
                             alt="volunteer administrator, coordinator, messaging module, new message"
                             srcset="https://aidspace.io/wp-content/uploads/2018/10/messages-2-1024x691.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/messages-2-300x202.png 300w, https://aidspace.io/wp-content/uploads/2018/10/messages-2-768x518.png 768w, https://aidspace.io/wp-content/uploads/2018/10/messages-2-600x405.png 600w, https://aidspace.io/wp-content/uploads/2018/10/messages-2.png 1199w"
                             sizes="(max-width: 1024px) 100vw, 1024px">
                    </div>

                    <ul>
                        <li style="font-weight: 400;"><span style="font-weight: 400;">If you have been sent a message inside the app – you will receive notification by your prefered method of contact. </span>
                        </li>
                        <li style="font-weight: 400;"><span style="font-weight: 400;">All new unread messages appear on the left side of your screen with a red indicator. When scroll click the message and your right side of the screen will open the message. </span>
                            <ul>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">You can choose what to do with the message – reply to the sender only or if needed reply to all.</span>
                                </li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Or delete message from your inbox.</span>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div id="Reports" class="tabcontent">
                    <p style="text-align: left;"><strong>Extract synthesized information of your choice. </strong></p>
                    <p><span style="font-weight: 400;">Extract synthesized information of your choice. </span></p>
                    <p><span style="font-weight: 400;">1. Volunteers list – Export reports for activities by groups and areas. </span><span
                            style="font-weight: 400;">Manage your results by configuring ascending or descending order by either first name, last name, email or their active period and export in different file formats.</span>
                    </p>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="519"
                             src="https://aidspace.io/wp-content/uploads/2018/10/reports-1-1024x519.png"
                             class="vc_single_image-img attachment-large"
                             alt="volunteer administrator, coordinator, tutorials, reports, volunteers list search report section"
                             srcset="https://aidspace.io/wp-content/uploads/2018/10/reports-1-1024x519.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/reports-1-300x152.png 300w, https://aidspace.io/wp-content/uploads/2018/10/reports-1-768x389.png 768w, https://aidspace.io/wp-content/uploads/2018/10/reports-1-600x304.png 600w"
                             sizes="(max-width: 1024px) 100vw, 1024px">
                    </div>

                    <p><span style="font-weight: 400;">2. Address list – Export in different formats addresses by groups and areas.&nbsp;</span><span
                            style="font-weight: 400;">Manage your results by configuring ascending or descending order by either first name, last name and details of their addresses and export in different file formats.</span>
                    </p>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="531"
                             src="https://aidspace.io/wp-content/uploads/2018/10/reports-2-1024x531.png"
                             class="vc_single_image-img attachment-large"
                             alt="volunteer administrator, coordinator, tutorials, reports, address list search report section"
                             srcset="https://aidspace.io/wp-content/uploads/2018/10/reports-2-1024x531.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/reports-2-300x155.png 300w, https://aidspace.io/wp-content/uploads/2018/10/reports-2-768x398.png 768w, https://aidspace.io/wp-content/uploads/2018/10/reports-2-600x311.png 600w"
                             sizes="(max-width: 1024px) 100vw, 1024px">
                    </div>

                    <p><span style="font-weight: 400;">3. Phone list – Export different categories of phones numbers of the volunteers by groups and areas.</span><span
                            style="font-weight: 400;">&nbsp;Manage your results by configuring ascending or descending order by either first name, last name or by the type of phone number they use and export in different file formats.</span>
                    </p>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="520"
                             src="https://aidspace.io/wp-content/uploads/2018/10/reports-3-1024x520.png"
                             class="vc_single_image-img attachment-large"
                             alt="volunteer administrator, coordinator, tutorials, reports, phone list search report section"
                             srcset="https://aidspace.io/wp-content/uploads/2018/10/reports-3-1024x520.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/reports-3-300x152.png 300w, https://aidspace.io/wp-content/uploads/2018/10/reports-3-768x390.png 768w, https://aidspace.io/wp-content/uploads/2018/10/reports-3-600x305.png 600w"
                             sizes="(max-width: 1024px) 100vw, 1024px">
                    </div>

                    <p><span style="font-weight: 400;">4. Work history – Detailed report based on date research for the activities of the volunteers including option to order by the reason for terminating. You can export in different formats or print &nbsp;the report.</span>
                    </p>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="565"
                             src="https://aidspace.io/wp-content/uploads/2018/10/reports-4-1024x565.png"
                             class="vc_single_image-img attachment-large"
                             alt="volunteer administrator, coordinator, tutorials, reports, work history search"
                             srcset="https://aidspace.io/wp-content/uploads/2018/10/reports-4-1024x565.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/reports-4-300x166.png 300w, https://aidspace.io/wp-content/uploads/2018/10/reports-4-768x424.png 768w, https://aidspace.io/wp-content/uploads/2018/10/reports-4-600x331.png 600w"
                             sizes="(max-width: 1024px) 100vw, 1024px">
                    </div>
                </div>

                <div id="Schedule" class="tabcontent">
                    <p><strong>This is the feature that helps organising and distributing shifts.</strong></p>
                    <p><span
                            style="font-weight: 400;">1. Three comfortable views for your convenience – List:&nbsp;</span>
                    </p>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="525"
                             src="https://aidspace.io/wp-content/uploads/2018/10/schedule-1-list-1024x525.png"
                             class="vc_single_image-img attachment-large"
                             alt="volunteer administrator, coordinator, tutorials, schedule module, list view of shifts"
                             srcset="https://aidspace.io/wp-content/uploads/2018/10/schedule-1-list-1024x525.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/schedule-1-list-300x154.png 300w, https://aidspace.io/wp-content/uploads/2018/10/schedule-1-list-768x394.png 768w, https://aidspace.io/wp-content/uploads/2018/10/schedule-1-list-600x308.png 600w"
                             sizes="(max-width: 1024px) 100vw, 1024px">
                    </div>

                    <p><span style="font-weight: 400;">Week:&nbsp;</span></p>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="576"
                             src="https://aidspace.io/wp-content/uploads/2018/10/schedule-2-week-1024x576.png"
                             class="vc_single_image-img attachment-large"
                             alt="volunteer administrator, coordinator, schedule moduel week view"
                             srcset="https://aidspace.io/wp-content/uploads/2018/10/schedule-2-week-1024x576.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/schedule-2-week-300x169.png 300w, https://aidspace.io/wp-content/uploads/2018/10/schedule-2-week-768x432.png 768w, https://aidspace.io/wp-content/uploads/2018/10/schedule-2-week-600x338.png 600w"
                             sizes="(max-width: 1024px) 100vw, 1024px">
                    </div>

                    <p><span style="font-weight: 400;">Month:&nbsp;</span></p>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="482"
                             src="https://aidspace.io/wp-content/uploads/2018/10/schedule-3-month-1024x482.png"
                             class="vc_single_image-img attachment-large"
                             alt="volunteer administrator, coordinator, tutorials, schedule module, month view"
                             srcset="https://aidspace.io/wp-content/uploads/2018/10/schedule-3-month-1024x482.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/schedule-3-month-300x141.png 300w, https://aidspace.io/wp-content/uploads/2018/10/schedule-3-month-768x362.png 768w, https://aidspace.io/wp-content/uploads/2018/10/schedule-3-month-600x283.png 600w"
                             sizes="(max-width: 1024px) 100vw, 1024px">
                    </div>

                    <p><span style="font-weight: 400;">2. Option to print in each view. </span></p>
                    <p><span style="font-weight: 400;">3. Create new shifts in each view. </span></p>
                    <p><span style="font-weight: 400;">4. To create a new shift press “+” button and a pop up will appear. </span>
                    </p>
                    <ul>
                        <li style="font-weight: 400;"><span style="font-weight: 400;">On Description page enter all details of the shift. Check “Published” so the shift will be accessible in the volunteers schedules and they can grab it.&nbsp;</span>
                        </li>
                    </ul>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="482"
                             src="https://aidspace.io/wp-content/uploads/2018/10/schedule-4-new-shift-1024x482.png"
                             class="vc_single_image-img attachment-large"
                             alt="volunteer administrator, coordinator, tutorials, create new shift, description tab"
                             srcset="https://aidspace.io/wp-content/uploads/2018/10/schedule-4-new-shift-1024x482.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/schedule-4-new-shift-300x141.png 300w, https://aidspace.io/wp-content/uploads/2018/10/schedule-4-new-shift-768x362.png 768w, https://aidspace.io/wp-content/uploads/2018/10/schedule-4-new-shift-600x283.png 600w"
                             sizes="(max-width: 1024px) 100vw, 1024px">
                    </div>

                    <ul>
                        <li style="font-weight: 400;"><span style="font-weight: 400;">Once Description is saved you can now visit Assignments page to pick volunteers using different criteria.&nbsp;</span>
                        </li>
                        <li style="font-weight: 400;"><span style="font-weight: 400;">If you want to personally recruit volunteers without publishing the shift don’t check “Published”. Just click “Save” and go to Assignments to pick a volunteer.</span>
                        </li>
                    </ul>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="576"
                             src="https://aidspace.io/wp-content/uploads/2018/10/schedule-5-assignments-1024x576.png"
                             class="vc_single_image-img attachment-large"
                             alt="volunteer administrator, tutorial, coordinator, new shift, assignments tab"
                             srcset="https://aidspace.io/wp-content/uploads/2018/10/schedule-5-assignments-1024x576.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/schedule-5-assignments-300x169.png 300w, https://aidspace.io/wp-content/uploads/2018/10/schedule-5-assignments-768x432.png 768w, https://aidspace.io/wp-content/uploads/2018/10/schedule-5-assignments-600x338.png 600w"
                             sizes="(max-width: 1024px) 100vw, 1024px">
                    </div>

                    <ul>
                        <li><span style="font-weight: 400;">You can always edit, delete, cancel, duplicate or unpublish the shift by clicking on it in your chosen schedule view. A small pop up will appear with all the actions available to perform.</span>
                        </li>
                    </ul>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="609"
                             src="https://aidspace.io/wp-content/uploads/2018/10/schedule-6-1024x609.png"
                             class="vc_single_image-img attachment-large"
                             alt="volunteer administrator, coordinator, schedule module shift option"
                             srcset="https://aidspace.io/wp-content/uploads/2018/10/schedule-6-1024x609.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/schedule-6-300x178.png 300w, https://aidspace.io/wp-content/uploads/2018/10/schedule-6-768x457.png 768w, https://aidspace.io/wp-content/uploads/2018/10/schedule-6-600x357.png 600w"
                             sizes="(max-width: 1024px) 100vw, 1024px">
                    </div>

                    <ul>
                        <li><span style="font-weight: 400;">A shift goes through these statuses:</span>
                            <ul>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Open – a shift is not started and a follow up is still to be sent</span>
                                </li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Followed up – an automatic email reminder is sent to the volunteer assigned, but who has not yet confirmed. Send 4 days before the shift start date.</span>
                                </li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Confirmed – the volunteer assigned has confirmed</span>
                                </li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">In progress – a shift is in progress – i.e. the current time is between the from-to time period of the shift</span>
                                </li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Ended – a shift has ended normally</span>
                                </li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Cancelled – a shift is cancelled before it has ended</span>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="482"
                             src="https://aidspace.io/wp-content/uploads/2018/10/schedule-7-shifts-statuses-1024x482.png"
                             class="vc_single_image-img attachment-large"
                             alt="volunteer administrator, coordinator, schedule module, shifts status"
                             srcset="https://aidspace.io/wp-content/uploads/2018/10/schedule-7-shifts-statuses-1024x482.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/schedule-7-shifts-statuses-300x141.png 300w, https://aidspace.io/wp-content/uploads/2018/10/schedule-7-shifts-statuses-768x362.png 768w, https://aidspace.io/wp-content/uploads/2018/10/schedule-7-shifts-statuses-600x283.png 600w"
                             sizes="(max-width: 1024px) 100vw, 1024px">
                    </div>

                    <ul>
                        <li style="font-weight: 400;"><span style="font-weight: 400;">Assignee status goes through these stages:</span>
                            <ul>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Awaiting acceptance (the assignee must confirm)</span>
                                </li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Awaiting approval ( administrator or coordinator must approve)</span>
                                </li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Rejected – (one of the users can reject) </span>
                                </li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Approved</span></li>
                            </ul>
                        </li>
                    </ul>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="482"
                             src="https://aidspace.io/wp-content/uploads/2018/10/schedule-8-assignee-statuses-1024x482.png"
                             class="vc_single_image-img attachment-large"
                             alt="Volunteer administrator, coordinator, assignees status scheduling module"
                             srcset="https://aidspace.io/wp-content/uploads/2018/10/schedule-8-assignee-statuses-1024x482.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/schedule-8-assignee-statuses-300x141.png 300w, https://aidspace.io/wp-content/uploads/2018/10/schedule-8-assignee-statuses-768x362.png 768w, https://aidspace.io/wp-content/uploads/2018/10/schedule-8-assignee-statuses-600x283.png 600w"
                             sizes="(max-width: 1024px) 100vw, 1024px">
                    </div>

                    <ul>
                        <li><span style="font-weight: 400;">When you pick a volunteer for a shift they will be sent a notification for this.</span>
                        </li>
                        <li><span style="font-weight: 400;">When a volunteer defines their decision on the shift you will be notified automatically. </span>
                        </li>
                    </ul>
                </div>

                <div id="Events" class="tabcontent">
                    <p><span style="font-weight: 400;">1. Three comfortable views for your convenience – List</span></p>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="508"
                             src="https://aidspace.io/wp-content/uploads/2018/10/events-1-1024x508.png"
                             class="vc_single_image-img attachment-large"
                             alt="Volunteer administrator, coordinator events module list view"
                             srcset="https://aidspace.io/wp-content/uploads/2018/10/events-1-1024x508.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/events-1-300x149.png 300w, https://aidspace.io/wp-content/uploads/2018/10/events-1-768x381.png 768w, https://aidspace.io/wp-content/uploads/2018/10/events-1-600x298.png 600w"
                             sizes="(max-width: 1024px) 100vw, 1024px">
                    </div>

                    <p><span style="font-weight: 400;">Week </span></p>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="621" src="https://aidspace.io/wp-content/uploads/2018/10/events-2-1024x621.png" class="vc_single_image-img attachment-large" alt="Volunteer administrator, coordinator, Events module week view" srcset="https://aidspace.io/wp-content/uploads/2018/10/events-2-1024x621.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/events-2-300x182.png 300w, https://aidspace.io/wp-content/uploads/2018/10/events-2-768x466.png 768w, https://aidspace.io/wp-content/uploads/2018/10/events-2-600x364.png 600w" sizes="(max-width: 1024px) 100vw, 1024px">
                    </div>

                    <p><span style="font-weight: 400;">and Month</span></p>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="513" src="https://aidspace.io/wp-content/uploads/2018/10/events-3-1024x513.png" class="vc_single_image-img attachment-large" alt="Volunteer administrator, events module month view" srcset="https://aidspace.io/wp-content/uploads/2018/10/events-3-1024x513.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/events-3-300x150.png 300w, https://aidspace.io/wp-content/uploads/2018/10/events-3-768x385.png 768w, https://aidspace.io/wp-content/uploads/2018/10/events-3-600x301.png 600w" sizes="(max-width: 1024px) 100vw, 1024px">
                    </div>

                    <p><span style="font-weight: 400;">2. Option to export in iCal in each view. </span></p>
                    <p><span style="font-weight: 400;">3. Create new event in each view. </span></p>
                    <ul>
                        <li style="font-weight: 400;"><span style="font-weight: 400;">Press “+” button and fill the details in the pop up window. Click “Save”.</span></li>
                        <li style="font-weight: 400;"><span style="font-weight: 400;">Once you save the event it will be visible to all users.</span></li>
                    </ul>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="482" src="https://aidspace.io/wp-content/uploads/2018/10/events-4-1024x482.png" class="vc_single_image-img attachment-large" alt="volunteer administrator, coordinator, events module, create new event" srcset="https://aidspace.io/wp-content/uploads/2018/10/events-4-1024x482.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/events-4-300x141.png 300w, https://aidspace.io/wp-content/uploads/2018/10/events-4-768x362.png 768w, https://aidspace.io/wp-content/uploads/2018/10/events-4-600x283.png 600w" sizes="(max-width: 1024px) 100vw, 1024px">
                    </div>
                </div>

                <div id="Settings" class="tabcontent">
                    <p><span style="font-weight: 400;">1. General. Set your timezone here:</span></p>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="384" src="https://aidspace.io/wp-content/uploads/2018/10/settings-1-general-timezone-1024x384.png" class="vc_single_image-img attachment-large" alt="Admin profile, adjust timezone" srcset="https://aidspace.io/wp-content/uploads/2018/10/settings-1-general-timezone-1024x384.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/settings-1-general-timezone-300x113.png 300w, https://aidspace.io/wp-content/uploads/2018/10/settings-1-general-timezone-768x288.png 768w, https://aidspace.io/wp-content/uploads/2018/10/settings-1-general-timezone-600x225.png 600w" sizes="(max-width: 1024px) 100vw, 1024px">
                    </div>

                    <p><span style="font-weight: 400;">2. Groups.&nbsp;</span></p>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="505" src="https://aidspace.io/wp-content/uploads/2018/10/settings-2-groups-1024x505.png" class="vc_single_image-img attachment-large" alt="Volunteer administrator, settings module, groups section" srcset="https://aidspace.io/wp-content/uploads/2018/10/settings-2-groups-1024x505.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/settings-2-groups-300x148.png 300w, https://aidspace.io/wp-content/uploads/2018/10/settings-2-groups-768x379.png 768w, https://aidspace.io/wp-content/uploads/2018/10/settings-2-groups-600x296.png 600w" sizes="(max-width: 1024px) 100vw, 1024px">
                    </div>

                    <ul>
                        <li><span style="font-weight: 400;">Create.</span></li>
                    </ul>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="508" src="https://aidspace.io/wp-content/uploads/2018/10/settings-3-groups-1024x508.png" class="vc_single_image-img attachment-large" alt="volunteer administrator, coordinator, create new group" srcset="https://aidspace.io/wp-content/uploads/2018/10/settings-3-groups-1024x508.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/settings-3-groups-300x149.png 300w, https://aidspace.io/wp-content/uploads/2018/10/settings-3-groups-768x381.png 768w, https://aidspace.io/wp-content/uploads/2018/10/settings-3-groups-600x298.png 600w" sizes="(max-width: 1024px) 100vw, 1024px">
                    </div>

                    <ul>
                        <li><span style="font-weight: 400;">Edit – click on the group and edit its name or&nbsp;</span><span style="font-weight: 400;">Delete – click on the group and click on the additional options menu</span><span style="font-weight: 400;">&nbsp;choose delete and confirm.&nbsp;</span></li>
                    </ul>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="509" src="https://aidspace.io/wp-content/uploads/2018/10/settings-4-groups-1024x509.png" class="vc_single_image-img attachment-large" alt="volunteer administrator, coordinator, edit a volunteer group" srcset="https://aidspace.io/wp-content/uploads/2018/10/settings-4-groups-1024x509.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/settings-4-groups-300x149.png 300w, https://aidspace.io/wp-content/uploads/2018/10/settings-4-groups-768x381.png 768w, https://aidspace.io/wp-content/uploads/2018/10/settings-4-groups-600x298.png 600w" sizes="(max-width: 1024px) 100vw, 1024px">
                    </div>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="783" height="192" src="https://aidspace.io/wp-content/uploads/2018/10/settings-5-groups.png" class="vc_single_image-img attachment-large" alt="" srcset="https://aidspace.io/wp-content/uploads/2018/10/settings-5-groups.png 783w, https://aidspace.io/wp-content/uploads/2018/10/settings-5-groups-300x74.png 300w, https://aidspace.io/wp-content/uploads/2018/10/settings-5-groups-768x188.png 768w, https://aidspace.io/wp-content/uploads/2018/10/settings-5-groups-600x147.png 600w" sizes="(max-width: 783px) 100vw, 783px">
                    </div>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="926" height="714" src="https://aidspace.io/wp-content/uploads/2018/10/settings-6-groups.png" class="vc_single_image-img attachment-large" alt="volunteer coordinator, delete volunteer group" srcset="https://aidspace.io/wp-content/uploads/2018/10/settings-6-groups.png 926w, https://aidspace.io/wp-content/uploads/2018/10/settings-6-groups-300x231.png 300w, https://aidspace.io/wp-content/uploads/2018/10/settings-6-groups-768x592.png 768w, https://aidspace.io/wp-content/uploads/2018/10/settings-6-groups-600x463.png 600w" sizes="(max-width: 926px) 100vw, 926px">
                    </div>

                    <p><span style="font-weight: 400;">3. Areas.</span></p>
                    <ul>
                        <li style="font-weight: 400;"><span style="font-weight: 400;">Create</span></li>
                    </ul>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="513" src="https://aidspace.io/wp-content/uploads/2018/10/settings-7-areas-1024x513.png" class="vc_single_image-img attachment-large" alt="volunteer administrator, create new area" srcset="https://aidspace.io/wp-content/uploads/2018/10/settings-7-areas-1024x513.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/settings-7-areas-300x150.png 300w, https://aidspace.io/wp-content/uploads/2018/10/settings-7-areas-768x385.png 768w, https://aidspace.io/wp-content/uploads/2018/10/settings-7-areas-600x301.png 600w" sizes="(max-width: 1024px) 100vw, 1024px">
                    </div>

                    <ul>
                        <li style="font-weight: 400;"><span style="font-weight: 400;">Edit &nbsp;click on the area and edit its name&nbsp;</span></li>
                        <li style="font-weight: 400;"><span style="font-weight: 400;">Delete click on the area and click on the additional options menu&nbsp;</span><span style="font-weight: 400;">choose delete and confirm.</span></li>
                    </ul>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="786" height="192" src="https://aidspace.io/wp-content/uploads/2018/10/settings-8-areas.png" class="vc_single_image-img attachment-large" alt="Volunteer coordinator, edit area" srcset="https://aidspace.io/wp-content/uploads/2018/10/settings-8-areas.png 786w, https://aidspace.io/wp-content/uploads/2018/10/settings-8-areas-300x73.png 300w, https://aidspace.io/wp-content/uploads/2018/10/settings-8-areas-768x188.png 768w, https://aidspace.io/wp-content/uploads/2018/10/settings-8-areas-600x147.png 600w" sizes="(max-width: 786px) 100vw, 786px">
                    </div>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="781" height="192" src="https://aidspace.io/wp-content/uploads/2018/10/settings-9-areas.png" class="vc_single_image-img attachment-large" alt="Volunteer administrator, Volunteer area" srcset="https://aidspace.io/wp-content/uploads/2018/10/settings-9-areas.png 781w, https://aidspace.io/wp-content/uploads/2018/10/settings-9-areas-300x74.png 300w, https://aidspace.io/wp-content/uploads/2018/10/settings-9-areas-768x189.png 768w, https://aidspace.io/wp-content/uploads/2018/10/settings-9-areas-600x148.png 600w" sizes="(max-width: 781px) 100vw, 781px">
                    </div>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="849" height="663" src="https://aidspace.io/wp-content/uploads/2018/10/settings-10-areas.png" class="vc_single_image-img attachment-large" alt="Volunteer administrator, edit volunteer area" srcset="https://aidspace.io/wp-content/uploads/2018/10/settings-10-areas.png 849w, https://aidspace.io/wp-content/uploads/2018/10/settings-10-areas-300x234.png 300w, https://aidspace.io/wp-content/uploads/2018/10/settings-10-areas-768x600.png 768w, https://aidspace.io/wp-content/uploads/2018/10/settings-10-areas-600x469.png 600w" sizes="(max-width: 849px) 100vw, 849px">
                    </div>

                    <p><span style="font-weight: 400;">4. Users. Manage your users and their roles.</span></p>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="278" src="https://aidspace.io/wp-content/uploads/2018/10/settings-1-users-1024x278.png" class="vc_single_image-img attachment-large" alt="Volunteer administrator, settings module, users section" srcset="https://aidspace.io/wp-content/uploads/2018/10/settings-1-users-1024x278.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/settings-1-users-300x82.png 300w, https://aidspace.io/wp-content/uploads/2018/10/settings-1-users-768x209.png 768w, https://aidspace.io/wp-content/uploads/2018/10/settings-1-users-600x163.png 600w" sizes="(max-width: 1024px) 100vw, 1024px">
                    </div>

                    <ul>
                        <li><span style="font-weight: 400;">Create users by clicking “+” button.</span></li>
                        <li style="font-weight: 400;"><span style="font-weight: 400;">Create more coordinators or add new administrators</span></li>
                        <li style="font-weight: 400;"><span style="font-weight: 400;">Set their preferences – chose their groups and areas and if they should see all volunteers or only the ones who belong to their groups and areas.</span></li>
                    </ul>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="783" height="709" src="https://aidspace.io/wp-content/uploads/2018/10/settings-2-users.png" class="vc_single_image-img attachment-large" alt="volunteer administrator, coordinator edit user" srcset="https://aidspace.io/wp-content/uploads/2018/10/settings-2-users.png 783w, https://aidspace.io/wp-content/uploads/2018/10/settings-2-users-300x272.png 300w, https://aidspace.io/wp-content/uploads/2018/10/settings-2-users-768x695.png 768w, https://aidspace.io/wp-content/uploads/2018/10/settings-2-users-600x543.png 600w" sizes="(max-width: 783px) 100vw, 783px">
                    </div>

                    <ul>
                        <li style="font-weight: 400;"><span style="font-weight: 400;">Edit users.</span>
                            <ul>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Click on the field in grey background while scroll and edt the user profile. </span></li>
                            </ul>
                        </li>
                        <li style="font-weight: 400;"><span style="font-weight: 400;">Delete users.</span></li>
                    </ul>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="785" height="705" src="https://aidspace.io/wp-content/uploads/2018/10/settings-3-users.png" class="vc_single_image-img attachment-large" alt="volunteer administrator, coordinator edit user" srcset="https://aidspace.io/wp-content/uploads/2018/10/settings-3-users.png 785w, https://aidspace.io/wp-content/uploads/2018/10/settings-3-users-300x269.png 300w, https://aidspace.io/wp-content/uploads/2018/10/settings-3-users-768x690.png 768w, https://aidspace.io/wp-content/uploads/2018/10/settings-3-users-600x539.png 600w" sizes="(max-width: 785px) 100vw, 785px">
                    </div>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="939" height="943" src="https://aidspace.io/wp-content/uploads/2018/10/settings-4-users.png" class="vc_single_image-img attachment-large" alt="Admin settings option, deleteing a user" srcset="https://aidspace.io/wp-content/uploads/2018/10/settings-4-users.png 939w, https://aidspace.io/wp-content/uploads/2018/10/settings-4-users-150x150.png 150w, https://aidspace.io/wp-content/uploads/2018/10/settings-4-users-300x300.png 300w, https://aidspace.io/wp-content/uploads/2018/10/settings-4-users-768x771.png 768w, https://aidspace.io/wp-content/uploads/2018/10/settings-4-users-600x603.png 600w, https://aidspace.io/wp-content/uploads/2018/10/settings-4-users-100x100.png 100w" sizes="(max-width: 939px) 100vw, 939px">
                    </div>

                    <p><span style="font-weight: 400;">5. Export. </span></p>
                    <ul>
                        <li><span style="font-weight: 400;">Export all of your data. </span></li>
                    </ul>
                    <p><span style="font-weight: 400;">6. Change log.&nbsp;</span></p>
                    <ul>
                        <li style="font-weight: 400;"><span style="font-weight: 400;">Follow through the changes and actions you performed. </span></li>
                        <li style="font-weight: 400;"><span style="font-weight: 400;">Access the old data and compare to the new entry. </span></li>
                        <li style="font-weight: 400;"><span style="font-weight: 400;">Follow up when you made the changes.</span></li>
                    </ul>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="624" src="https://aidspace.io/wp-content/uploads/2018/10/settings-1-change-log-1024x624.png" class="vc_single_image-img attachment-large" alt="Admin profile, coordinator profile, change log" srcset="https://aidspace.io/wp-content/uploads/2018/10/settings-1-change-log-1024x624.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/settings-1-change-log-300x183.png 300w, https://aidspace.io/wp-content/uploads/2018/10/settings-1-change-log-768x468.png 768w, https://aidspace.io/wp-content/uploads/2018/10/settings-1-change-log-600x366.png 600w, https://aidspace.io/wp-content/uploads/2018/10/settings-1-change-log.png 1594w" sizes="(max-width: 1024px) 100vw, 1024px">
                    </div>
                </div>
            </div>

            <div class="wrapper-latest-features-content-2">
                <h3 style=""><strong><span style="text-decoration: underline;">Volunteers</span></strong></h3>

                <div class="wrapper-latest-features-content">
                    <div class="tab">
                        <button href="#" class="tab-item tablinks tablinks2" onclick="openTabs2(event, 'Dashboard2')" id="defaultOpen2">
                            Dashboard
                        </button>

                        <button href="#" class="tab-item tablinks tablinks2" onclick="openTabs2(event, 'MyProfile2')">
                            My profile
                        </button>

                        <button href="#" class="tab-item tablinks tablinks2" onclick="openTabs2(event, 'Messages2')">
                            Messages
                        </button>

                        <button href="#" class="tab-item tablinks tablinks2" onclick="openTabs2(event, 'Schedule2')">
                            My Schedule
                        </button>

                        <button href="#" class="tab-item tablinks tablinks2" onclick="openTabs2(event, 'Events2')">
                            Events
                        </button>
                    </div>

                    <div id="Dashboard2" class="tabcontent2">
                        <p><strong>Your way to communicate and get up-to-date information from your coordinator and administrators. Dashboard is the first page that loads on your screen once you log in.</strong></p>

                        <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                            <img width="1024" height="517" src="https://aidspace.io/wp-content/uploads/2018/10/volunteer-dashboard-1-1024x517.png" class="vc_single_image-img attachment-large" alt="Volunteer dashboard view" srcset="https://aidspace.io/wp-content/uploads/2018/10/volunteer-dashboard-1-1024x517.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/volunteer-dashboard-1-300x152.png 300w, https://aidspace.io/wp-content/uploads/2018/10/volunteer-dashboard-1-768x388.png 768w, https://aidspace.io/wp-content/uploads/2018/10/volunteer-dashboard-1-600x303.png 600w, https://aidspace.io/wp-content/uploads/2018/10/volunteer-dashboard-1.png 1597w" sizes="(max-width: 1024px) 100vw, 1024px">
                        </div>

                        <p><span style="font-weight: 400;">1. Comment on post: Click on Comments filed&nbsp;</span><span style="font-weight: 400;">and the post will open with text area where you can type your comments and click “Send”.</span></p>

                        <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                            <img width="1024" height="508" src="https://aidspace.io/wp-content/uploads/2018/10/volunteer-dashboard-3-1024x508.png" class="vc_single_image-img attachment-large" alt="Dasboard in volunteer profile" srcset="https://aidspace.io/wp-content/uploads/2018/10/volunteer-dashboard-3-1024x508.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/volunteer-dashboard-3-300x149.png 300w, https://aidspace.io/wp-content/uploads/2018/10/volunteer-dashboard-3-768x381.png 768w, https://aidspace.io/wp-content/uploads/2018/10/volunteer-dashboard-3-600x298.png 600w" sizes="(max-width: 1024px) 100vw, 1024px">
                        </div>

                        <p><span style="font-weight: 400;">2. Can I attach files on my Comments? – No. This is not an option yet. We will let you know when you are able to do that. </span></p>
                        <p><span style="font-weight: 400;">3. Can I create posts? – No. Only the administrators and coordinators can do that. The volunteer can comment on posts. </span></p>
                        <p><span style="font-weight: 400;">4. How can I edit my Comments? – This is not an option yet. We will let you know when you are able to do that. </span></p>
                        <p><span style="font-weight: 400;">5. How can I delete my Comments? – This is not an option yet. We will let you know when you are able to do that.</span></p>
                    </div>

                    <div id="MyProfile2" class="tabcontent2">
                        <p><strong>Manage your personal profile.</strong></p>
                        <p><span style="font-weight: 400;">1. Profile tab. Manage your basic data here.</span></p>
                        <ul>
                            <li style="font-weight: 400;"><span style="font-weight: 400;">You can edit your profile picture by clicking on it. </span></li>
                            <li style="font-weight: 400;"><span style="font-weight: 400;">Change your notification preferences and verify your contact details.</span></li>
                        </ul>

                        <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                            <img width="1024" height="606" src="https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-profile-1-1024x606.png" class="vc_single_image-img attachment-large" alt="Volunteer profile, profile tab, volunteer details, confirm phone number" srcset="https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-profile-1-1024x606.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-profile-1-300x178.png 300w, https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-profile-1-768x455.png 768w, https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-profile-1-600x355.png 600w" sizes="(max-width: 1024px) 100vw, 1024px">
                        </div>

                        <p><span style="font-weight: 400;">2. Account tab. </span></p>
                        <ul>
                            <li style="font-weight: 400;"><span style="font-weight: 400;">Change your password</span></li>
                            <li style="font-weight: 400;"><span style="font-weight: 400;">Or edit your email</span></li>
                        </ul>

                        <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                            <img width="1024" height="303" src="https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-profile-2-1024x303.png" class="vc_single_image-img attachment-large" alt="Volunteer profile, edit password, edit account, account settings" srcset="https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-profile-2-1024x303.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-profile-2-300x89.png 300w, https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-profile-2-768x227.png 768w, https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-profile-2-600x178.png 600w" sizes="(max-width: 1024px) 100vw, 1024px">
                        </div>

                        <p><span style="font-weight: 400;">3. Availability tab. </span></p>
                        <ul>
                            <li style="font-weight: 400;"><span style="font-weight: 400;">Enter your availability – click “Add” button</span><span style="font-weight: 400;">&nbsp;click “Save” on the pop up and then “Save”on the initial pop up window. You can easily fix a wrongfully entered availability just using drag and drop.</span></li>
                        </ul>

                        <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                            <img width="1024" height="626" src="https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-profile-3-1024x626.png" class="vc_single_image-img attachment-large" alt="Volunteer availability, enter availability" srcset="https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-profile-3-1024x626.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-profile-3-300x183.png 300w, https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-profile-3-768x470.png 768w, https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-profile-3-600x367.png 600w, https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-profile-3.png 1346w" sizes="(max-width: 1024px) 100vw, 1024px">
                        </div>

                        <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                            <img width="1024" height="528" src="https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-profile-4-1024x528.png" class="vc_single_image-img attachment-large" alt="Volunteer avalability, move availability" srcset="https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-profile-4-1024x528.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-profile-4-300x155.png 300w, https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-profile-4-768x396.png 768w, https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-profile-4-600x309.png 600w" sizes="(max-width: 1024px) 100vw, 1024px">
                        </div>

                        <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                            <img width="1024" height="522" src="https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-profile-5-1024x522.png" class="vc_single_image-img attachment-large" alt="Volunteer availability," srcset="https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-profile-5-1024x522.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-profile-5-300x153.png 300w, https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-profile-5-768x392.png 768w, https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-profile-5-600x306.png 600w" sizes="(max-width: 1024px) 100vw, 1024px">
                        </div>
                    </div>

                    <div id="Messages2" class="tabcontent2">
                        <p><strong>Exchange emails with your fellow volunteers or turn to your coordinators.&nbsp;&nbsp;</strong></p>
                        <p><span style="font-weight: 400;">1. This is your inbox:</span></p>

                        <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                            <img width="1024" height="509" src="https://aidspace.io/wp-content/uploads/2018/10/volunteers-messages-1-1024x509.png" class="vc_single_image-img attachment-large" alt="Volunteers messaging module, messages module" srcset="https://aidspace.io/wp-content/uploads/2018/10/volunteers-messages-1-1024x509.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-messages-1-300x149.png 300w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-messages-1-768x381.png 768w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-messages-1-600x298.png 600w" sizes="(max-width: 1024px) 100vw, 1024px">
                        </div>

                        <p><span style="font-weight: 400;">2. Create new message. </span></p>
                        <ul>
                            <li style="font-weight: 400;"><span style="font-weight: 400;">Press “+” button. A pop up appears with many useful options.&nbsp;</span>
                                <ul>
                                    <li style="font-weight: 400;"><span style="font-weight: 400;">Send a message to all active volunteers or include inactive as well. Note: when you personally want to address a volunteer do not switch the button on because your message will be automatically sent to all active volunteers as well. </span></li>
                                    <li style="font-weight: 400;"><span style="font-weight: 400;">Select groups for your message</span></li>
                                    <li style="font-weight: 400;"><span style="font-weight: 400;">Select areas </span></li>
                                    <li style="font-weight: 400;"><span style="font-weight: 400;">Select volunteers – personalize your message </span></li>
                                    <li style="font-weight: 400;"><span style="font-weight: 400;">Send a copy to your coordinator or fellow coordinators and administrators.</span></li>
                                </ul>
                            </li>
                        </ul>

                        <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                            <img width="1024" height="691" src="https://aidspace.io/wp-content/uploads/2018/10/volunteers-messages-2-1024x691.png" class="vc_single_image-img attachment-large" alt="Volunteer messging, messages module" srcset="https://aidspace.io/wp-content/uploads/2018/10/volunteers-messages-2-1024x691.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-messages-2-300x202.png 300w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-messages-2-768x518.png 768w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-messages-2-600x405.png 600w, https://aidspace.io/wp-content/uploads/2018/10/volunteers-messages-2.png 1199w" sizes="(max-width: 1024px) 100vw, 1024px">
                        </div>

                        <p><span style="font-weight: 400;">3. If you have been sent message inside the app – you will receive notification by your prefered method of contact. </span></p>
                        <ul>
                            <li style="font-weight: 400;"><span style="font-weight: 400;">All new unread messages appear on the left side of your screen with a red indicator. When scroll click the message and your right side of the screen will open the message. </span>
                                <ul>
                                    <li style="font-weight: 400;"><span style="font-weight: 400;">You can choose what to do with the message – reply to the sender only or if needed reply to all.</span></li>
                                    <li style="font-weight: 400;"><span style="font-weight: 400;">Or delete message from your inbox.</span></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div id="Schedule2" class="tabcontent2">
                        <p><strong>Your assignments in one place – easy to grab and reject.</strong></p>
                        <ol>
                            <li><span style="font-weight: 400;">Three comfortable views for your convenience – List:</span><span style="font-weight: 400;">&nbsp;</span></li>
                        </ol>

                        <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                            <img width="1024" height="613" src="https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-schedule-1-1024x613.png" class="vc_single_image-img attachment-large" alt="Schedule of the volunteer, shifts of the volunteer" srcset="https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-schedule-1-1024x613.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-schedule-1-300x180.png 300w, https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-schedule-1-768x460.png 768w, https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-schedule-1-600x359.png 600w" sizes="(max-width: 1024px) 100vw, 1024px">
                        </div>

                        <p><span style="font-weight: 400;">Week:</span></p>

                        <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                            <img width="1024" height="624" src="https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-schedule-2-1024x624.png" class="vc_single_image-img attachment-large" alt="Schedule week view, schedule module" srcset="https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-schedule-2-1024x624.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-schedule-2-300x183.png 300w, https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-schedule-2-768x468.png 768w, https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-schedule-2-600x366.png 600w" sizes="(max-width: 1024px) 100vw, 1024px">
                        </div>

                        <p><span style="font-weight: 400;">Month</span><span style="font-weight: 400;">:</span></p>

                        <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                            <img width="1024" height="510" src="https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-schedule-3-1024x510.png" class="vc_single_image-img attachment-large" alt="Volunteer schedule month view" srcset="https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-schedule-3-1024x510.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-schedule-3-300x150.png 300w, https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-schedule-3-768x383.png 768w, https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-schedule-3-600x299.png 600w" sizes="(max-width: 1024px) 100vw, 1024px">
                        </div>

                        <p><span style="font-weight: 400;">2. You can search shifts by their status or start and end date.</span></p>

                        <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                            <img width="1024" height="306" src="https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-schedule-4-1024x306.png" class="vc_single_image-img attachment-large" alt="Volunteer schedule, shifts statuses" srcset="https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-schedule-4-1024x306.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-schedule-4-300x90.png 300w, https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-schedule-4-768x230.png 768w, https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-schedule-4-600x179.png 600w" sizes="(max-width: 1024px) 100vw, 1024px">
                        </div>

                        <p><span style="font-weight: 400;">3. Apply for a shift.</span></p>

                        <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                            <img width="1024" height="492" src="https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-schedule-5-1024x492.png" class="vc_single_image-img attachment-large" alt="How to grab shift, volunteer shifts" srcset="https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-schedule-5-1024x492.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-schedule-5-300x144.png 300w, https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-schedule-5-768x369.png 768w, https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-schedule-5-600x288.png 600w" sizes="(max-width: 1024px) 100vw, 1024px">
                        </div>

                        <p><span style="font-weight: 400;">4. Or reject a shift.</span></p>

                        <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                            <img width="1024" height="502" src="https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-schedule-6-1024x502.png" class="vc_single_image-img attachment-large" alt="how to reject shift, volunteer shifts rejection" srcset="https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-schedule-6-1024x502.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-schedule-6-300x147.png 300w, https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-schedule-6-768x377.png 768w, https://aidspace.io/wp-content/uploads/2018/10/volunteer-my-schedule-6-600x294.png 600w" sizes="(max-width: 1024px) 100vw, 1024px">
                        </div>
                    </div>

                    <div id="Events2" class="tabcontent2">
                        <p><strong>Know the upcoming events in the organisation by following the Events calendar.</strong></p>
                        <p><span style="font-weight: 400;">1. Three comfortable views for your convenience – List:</span></p>

                        <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                            <img width="1024" height="370" src="https://aidspace.io/wp-content/uploads/2018/10/volunteer-events-1-1024x370.png" class="vc_single_image-img attachment-large" alt="Events, events module, events list view" srcset="https://aidspace.io/wp-content/uploads/2018/10/volunteer-events-1-1024x370.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/volunteer-events-1-300x108.png 300w, https://aidspace.io/wp-content/uploads/2018/10/volunteer-events-1-768x278.png 768w, https://aidspace.io/wp-content/uploads/2018/10/volunteer-events-1-600x217.png 600w" sizes="(max-width: 1024px) 100vw, 1024px">
                        </div>

                        <p><span style="font-weight: 400;">Week:</span></p>

                        <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                            <img width="1024" height="515" src="https://aidspace.io/wp-content/uploads/2018/10/volunteer-events-2-1024x515.png" class="vc_single_image-img attachment-large" alt="Events module, events, events week view" srcset="https://aidspace.io/wp-content/uploads/2018/10/volunteer-events-2-1024x515.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/volunteer-events-2-300x151.png 300w, https://aidspace.io/wp-content/uploads/2018/10/volunteer-events-2-768x386.png 768w, https://aidspace.io/wp-content/uploads/2018/10/volunteer-events-2-600x302.png 600w" sizes="(max-width: 1024px) 100vw, 1024px">
                        </div>

                        <p><span style="font-weight: 400;">and Month:</span></p>

                        <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                            <img width="1024" height="448" src="https://aidspace.io/wp-content/uploads/2018/10/volunteer-events-3-1024x448.png" class="vc_single_image-img attachment-large" alt="Events, events module month view" srcset="https://aidspace.io/wp-content/uploads/2018/10/volunteer-events-3-1024x448.png 1024w, https://aidspace.io/wp-content/uploads/2018/10/volunteer-events-3-300x131.png 300w, https://aidspace.io/wp-content/uploads/2018/10/volunteer-events-3-768x336.png 768w, https://aidspace.io/wp-content/uploads/2018/10/volunteer-events-3-600x263.png 600w" sizes="(max-width: 1024px) 100vw, 1024px">
                        </div>
                        <p><span style="font-weight: 400;">2. Option to export in iCal in each view.</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        function openTabs(evt, cityName) {
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

        function openTabs2(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent2");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks2");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
        document.getElementById("defaultOpen2").click();
    </script>
@endsection
