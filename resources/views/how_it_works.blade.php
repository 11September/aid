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
                        <img width="1024" height="318" src="{{ asset('images/My-profie-1024x318.png') }}"
                             alt="volunteer administrator, coordinator, tutorials, my profile administrator coordinator">
                    </div>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="307"
                             src="{{ asset('images/my-profile-2-1024x307.png') }}"
                             alt="volunteer administrator, coordinator, tutorials, my profile administrator coordinator">
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
                             src="{{ asset('images/my-profile-3.png') }}"
                             alt="volunteer administrator, coordinator, tutorials, settings module, edit user">
                    </div>

                    <ul>
                        <li style="font-weight: 400;"><span style="font-weight: 400;">If you are to be responsible for all volunteers in the organisation in many matters and occasions scroll down to the bottom of the pop up and check &nbsp;“Can see all volunteers”. This is how it should look like once you chose the option</span><span
                                style="font-weight: 400;">. &nbsp;This could help you assign a volunteer that does not belong to a certain group or area to a shift or task.</span>
                        </li>
                    </ul>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="870" height="807"
                             src="{{ asset('images/my-profile-4.png') }}"
                             class="vc_single_image-img attachment-large"
                             alt="volunteer administrator, coordinator, tutorials, settings module, edit user">
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
                             src="{{ asset('images/dashboard-1-1024x482.png') }}" alt="dashboard module, tutorials,">
                    </div>

                    <p><span style="font-weight: 400;">Create new post. – Click “+” button</span><span
                            style="font-weight: 400;">&nbsp;and a pop up will appear. Fill the required fields Title and Message. Depending on the message you want the users to read you can allow or disable comments. Click “Save” to publish your post.</span>
                    </p>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="968" height="490"
                             src="{{ asset('images/dashboard-2.png') }}"
                             alt="dashboard module, tutorials, create new post, disable comments, allow comments">
                    </div>

                    <p>This is how a post with “Disable comments” function look like:</p>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="187"
                             src="{{ asset('images/dashboard-3-1024x187.png') }}"
                             alt="Dashboard, new comment, tutorials, volunteer">
                    </div>

                    <p><span style="font-weight: 400;">Comment on post: Click on Comments filed&nbsp;</span><span
                            style="font-weight: 400;">and the post will open with text area where you can type your comments and click “Send”.</span>
                    </p>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="140"
                             src="{{ asset('images/dashboard-4-1024x140.png') }}"
                             alt="Dashboard, new comment, tutorials, volunteer">
                    </div>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="232"
                             src="{{ asset('images/dashboard-5-1024x232.png') }}"
                             alt="Dashboard, new comment, tutorials, volunteer">
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
                             src="{{ asset('images/volunteers-1-1024x523.png') }}"
                             alt="volunteer administrator, coordinator, tutorials, ative volunteers">
                    </div>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1633" height="837"
                             src="{{ asset('images/scheduling-module-2.png') }}"
                             alt="List of volnteers and their assignments in Schedule module">
                    </div>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="516"
                             src="{{ asset('images/volunteers-2-1024x516.png') }}"
                             alt="volunteer administrator, coordinator, tutorials, edit profile, active and inactive volunteers">
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
                             src="{{ asset('images/volunteers-3-1024x512.png') }}"
                             alt="volunteer administrator, coordinator, tutorials, edit profile">
                    </div>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="375"
                             src="{{ asset('images/volunteers-4-1024x375.png') }}"
                             alt="volunteer administrator, coordinator, tutorials, options to manage volunteer profile data">
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
                             src="{{ asset('images/volunteers-5-1024x626.png') }}"
                             alt="volunteer administrator, coordinator, tutorials, volunteer profile tab, profile picture">
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
                             src="{{ asset('images/volunteers-5-1024x626.png') }}"
                             alt="volunteer administrator, coordinator, tutorials, volunteer profile tab, profile picture">
                    </div>

                    <ul>
                        <li><span style="font-weight: 400;">See history is available for you to follow the changes in the profile and the person who inserted them (the volunteer, the coordinator or the administrator).</span>
                        </li>
                    </ul>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="613"
                             src="{{ asset('images/volunteers-7-1024x613.png') }}"
                             alt="volunteer administrator, coordinator, volunteer profile">
                    </div>

                    <ul>
                        <li><span style="font-weight: 400;">Education, Skills and Languages –&nbsp;</span><span
                                style="font-weight: 400;">add accordingly one or more.</span></li>
                    </ul>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="625"
                             src="{{ asset('images/volunteers-8-1024x625.png') }}"
                             alt="volunteer administrator, coordinator, tutorials, education, skills and languages tab">
                    </div>

                    <ul>
                        <li><span style="font-weight: 400;">Work.&nbsp;</span><span style="font-weight: 400;">In this section you can insert data on the volunteers current or past activities in the organisation and some very important details such as their reason for leaving the position.&nbsp;</span>
                        </li>
                    </ul>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="624"
                             src="{{ asset('images/volunteers-9-1024x624.png') }}"
                             alt="volunteer administrator, coordinator, tutorials, work experience tab">
                    </div>

                    <ul>
                        <li><span style="font-weight: 400;">Documents. </span><span style="font-weight: 400;">Upload all required documents.&nbsp;</span>
                        </li>
                    </ul>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="623"
                             src="{{ asset('images/volunteers-10-1024x623.png') }}"
                             alt="volunteer administrator, coordinator, tutorials, documents tab">
                    </div>

                    <ul>
                        <li><span style="font-weight: 400;">Equipment. </span><span style="font-weight: 400;">Sometimes organisations provide materials in order to ensure the volunteers performance.</span>
                        </li>
                    </ul>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="613"
                             src="{{ asset('images/volunteers-11-1024x613.png') }}"
                             alt="volunteer administrator, equipment tab, equipment for the volunteer">
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
                             src="{{ asset('images/volunteers-12-1024x627.png') }}"
                             alt="volunteer availability, manage volunteer availability">
                    </div>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="626"
                             src="{{ asset('images/volunteers-13-1024x626.png') }}"
                             alt="volunteer availability, availability of the volunteer">
                    </div>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="619"
                             src="{{ asset('images/volunteers-14-1024x619.png') }}"
                             alt="volunteer availability, manage volunteer availability">
                    </div>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="622"
                             src="{{ asset('images/volunteers-15-1024x622.png') }}"
                             alt="volunteer availability, manage volunteer availability">
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
                        <img width="1024" height="623" src="{{ asset('images/volunteers-16-1024x623.png') }}" alt="volunteer profile, tutorials see history">
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
                             src="{{ asset('images/advanced-search-2-1024x613.png') }}"
                             alt="volunteer administrator, coordinator, advanced search">
                    </div>

                    <p><span
                            style="font-weight: 400;">There is also a section on the main menu on the left sidebar. </span>
                    </p>
                    <p><span style="font-weight: 400;">1. We have created this entire section to allow you to search candidates by different criteria. For your convenience you also have options to</span><span
                            style="font-weight: 400;">:</span></p>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="613"
                             src="{{ asset('images/advanced-search-2-1024x613.png') }}"
                             alt="volunteer administrator, coordinator, advanced search">
                    </div>

                    <ul>
                        <li><span style="font-weight: 400;">Send message to all – if all the candidates match your expectation you can message all of them using Messages module. Press that button and you will automatically be transferred to the Messages module to write a new message. </span><span
                                style="font-weight: 400;">If you decide you want to had pick volunteer to receive your message click on the field with their names and drop down will appear.</span>
                        </li>
                    </ul>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="587"
                             src="{{ asset('images/advanced-search-3-1024x587.png') }}"
                             alt="volunteers administrator, coordinator, tutorials, new message">
                    </div>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="579"
                             src="{{ asset('images/advanced-search-4-1024x579.png') }}"
                             alt="volunteer administrator, coordinator, tutorials, messages module, choose recipients, new message">
                    </div>

                    <ul>
                        <li><span style="font-weight: 400;">Three additional options to export the results in different formats if needed.</span>
                        </li>
                    </ul>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="512"
                             src="{{ asset('images/advanced-search-5-1024x512.png') }}"
                             alt="volunteer administrator, coordinator, tutorials, volunteer list export options">
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
                             src="{{ asset('images/advanced-search-6-1024x476.png') }}"
                             alt="volunteer administrator, coordinator, tutorials, advanced search, no data available">
                    </div>
                </div>

                <div id="Messages" class="tabcontent">
                    <p><strong>Exchange emails with your fellow coordinators and administrators, share important
                            information inside the app with volunteers.</strong></p>
                    <p><span style="font-weight: 400;">This is your inbox:</span></p>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="511"
                             src="{{ asset('images/messages-1-1024x511.png') }}"
                             alt="volunteer administrator, coordinator, messages module">
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
                             src="{{ asset('images/messages-2-1024x691.png') }}"
                             alt="volunteer administrator, coordinator, messaging module, new message">
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
                             src="{{ asset('images/reports-1-1024x519.png') }}"
                             alt="volunteer administrator, coordinator, tutorials, reports, volunteers list search report section">
                    </div>

                    <p><span style="font-weight: 400;">2. Address list – Export in different formats addresses by groups and areas.&nbsp;</span><span
                            style="font-weight: 400;">Manage your results by configuring ascending or descending order by either first name, last name and details of their addresses and export in different file formats.</span>
                    </p>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="531"
                             src="{{ asset('images/reports-2-1024x531.png') }}"
                             alt="volunteer administrator, coordinator, tutorials, reports, address list search report section">
                    </div>

                    <p><span style="font-weight: 400;">3. Phone list – Export different categories of phones numbers of the volunteers by groups and areas.</span><span
                            style="font-weight: 400;">&nbsp;Manage your results by configuring ascending or descending order by either first name, last name or by the type of phone number they use and export in different file formats.</span>
                    </p>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="520"
                             src="{{ asset('images/reports-3-1024x520.png') }}"
                             alt="volunteer administrator, coordinator, tutorials, reports, phone list search report section">
                    </div>

                    <p><span style="font-weight: 400;">4. Work history – Detailed report based on date research for the activities of the volunteers including option to order by the reason for terminating. You can export in different formats or print &nbsp;the report.</span>
                    </p>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="565"
                             src="{{ asset('images/reports-4-1024x565.png') }}"
                             alt="volunteer administrator, coordinator, tutorials, reports, work history search">
                    </div>
                </div>

                <div id="Schedule" class="tabcontent">
                    <p><strong>This is the feature that helps organising and distributing shifts.</strong></p>
                    <p><span
                            style="font-weight: 400;">1. Three comfortable views for your convenience – List:&nbsp;</span>
                    </p>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="525"
                             src="{{ asset('images/schedule-1-list-1024x525.png') }}"
                             alt="volunteer administrator, coordinator, tutorials, schedule module, list view of shifts">
                    </div>

                    <p><span style="font-weight: 400;">Week:&nbsp;</span></p>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="576"
                             src="{{ asset('images/schedule-2-week-1024x576.png') }}"
                             alt="volunteer administrator, coordinator, schedule moduel week view">
                    </div>

                    <p><span style="font-weight: 400;">Month:&nbsp;</span></p>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="482"
                             src="{{ asset('images/schedule-3-month-1024x482.png') }}"
                             alt="volunteer administrator, coordinator, tutorials, schedule module, month view">
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
                             src="{{ asset('images/schedule-4-new-shift-1024x482.png') }}"
                             alt="volunteer administrator, coordinator, tutorials, create new shift, description tab">
                    </div>

                    <ul>
                        <li style="font-weight: 400;"><span style="font-weight: 400;">Once Description is saved you can now visit Assignments page to pick volunteers using different criteria.&nbsp;</span>
                        </li>
                        <li style="font-weight: 400;"><span style="font-weight: 400;">If you want to personally recruit volunteers without publishing the shift don’t check “Published”. Just click “Save” and go to Assignments to pick a volunteer.</span>
                        </li>
                    </ul>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="576"
                             src="{{ asset('images/schedule-5-assignments-1024x576.png') }}"
                             alt="volunteer administrator, tutorial, coordinator, new shift, assignments tab">
                    </div>

                    <ul>
                        <li><span style="font-weight: 400;">You can always edit, delete, cancel, duplicate or unpublish the shift by clicking on it in your chosen schedule view. A small pop up will appear with all the actions available to perform.</span>
                        </li>
                    </ul>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="609"
                             src="{{ asset('images/schedule-6-1024x609.png') }}"
                             alt="volunteer administrator, coordinator, schedule module shift option">
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
                             src="{{ asset('images/schedule-7-shifts-statuses-1024x482.png') }}"
                             alt="volunteer administrator, coordinator, schedule module, shifts status">
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
                             src="{{ asset('images/schedule-8-assignee-statuses-1024x482.png') }}"
                             alt="Volunteer administrator, coordinator, assignees status scheduling module">
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
                             src="{{ asset('images/events-1-1024x508.png') }}"
                             alt="Volunteer administrator, coordinator events module list view">
                    </div>

                    <p><span style="font-weight: 400;">Week </span></p>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="621"
                             src="{{ asset('images/events-2-1024x621.png') }}"
                             alt="Volunteer administrator, coordinator, Events module week view">
                    </div>

                    <p><span style="font-weight: 400;">and Month</span></p>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="513"
                             src="{{ asset('images/events-3-1024x513.png') }}"
                             alt="Volunteer administrator, events module month view">
                    </div>

                    <p><span style="font-weight: 400;">2. Option to export in iCal in each view. </span></p>
                    <p><span style="font-weight: 400;">3. Create new event in each view. </span></p>
                    <ul>
                        <li style="font-weight: 400;"><span style="font-weight: 400;">Press “+” button and fill the details in the pop up window. Click “Save”.</span>
                        </li>
                        <li style="font-weight: 400;"><span style="font-weight: 400;">Once you save the event it will be visible to all users.</span>
                        </li>
                    </ul>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="482"
                             src="{{ asset('images/events-4-1024x482.png') }}"
                             alt="volunteer administrator, coordinator, events module, create new event">
                    </div>
                </div>

                <div id="Settings" class="tabcontent">
                    <p><span style="font-weight: 400;">1. General. Set your timezone here:</span></p>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="384"
                             src="{{ asset('images/settings-1-general-timezone-1024x384.png') }}" alt="Admin profile, adjust timezone">
                    </div>

                    <p><span style="font-weight: 400;">2. Groups.&nbsp;</span></p>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="505"
                             src="{{ asset('images/settings-2-groups-1024x505.png') }}"
                             alt="Volunteer administrator, settings module, groups section">
                    </div>

                    <ul>
                        <li><span style="font-weight: 400;">Create.</span></li>
                    </ul>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="508"
                             src="{{ asset('images/settings-3-groups-1024x508.png') }}"
                             alt="volunteer administrator, coordinator, create new group">
                    </div>

                    <ul>
                        <li><span
                                style="font-weight: 400;">Edit – click on the group and edit its name or&nbsp;</span><span
                                style="font-weight: 400;">Delete – click on the group and click on the additional options menu</span><span
                                style="font-weight: 400;">&nbsp;choose delete and confirm.&nbsp;</span></li>
                    </ul>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="509"
                             src="{{ asset('images/settings-4-groups-1024x509.png') }}"
                             alt="volunteer administrator, coordinator, edit a volunteer group">
                    </div>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="783" height="192"
                             src="{{ asset('images/settings-5-groups.png') }}" alt="">
                    </div>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="926" height="714"
                             src="{{ asset('images/settings-6-groups.png') }}"
                             alt="volunteer coordinator, delete volunteer group">
                    </div>

                    <p><span style="font-weight: 400;">3. Areas.</span></p>
                    <ul>
                        <li style="font-weight: 400;"><span style="font-weight: 400;">Create</span></li>
                    </ul>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="513"
                             src="{{ asset('images/settings-7-areas-1024x513.png') }}" alt="volunteer administrator, create new area">
                    </div>

                    <ul>
                        <li style="font-weight: 400;"><span style="font-weight: 400;">Edit &nbsp;click on the area and edit its name&nbsp;</span>
                        </li>
                        <li style="font-weight: 400;"><span style="font-weight: 400;">Delete click on the area and click on the additional options menu&nbsp;</span><span
                                style="font-weight: 400;">choose delete and confirm.</span></li>
                    </ul>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="786" height="192"
                             src="{{ asset('images/settings-8-areas.png') }}" alt="Volunteer coordinator, edit area">
                    </div>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="781" height="192"
                             src="{{ asset('images/settings-9-areas.png') }}" alt="Volunteer administrator, Volunteer area">
                    </div>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="849" height="663"
                             src="{{ asset('images/settings-10-areas.png') }}"
                             alt="Volunteer administrator, edit volunteer area">
                    </div>

                    <p><span style="font-weight: 400;">4. Users. Manage your users and their roles.</span></p>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="278"
                             src="{{ asset('images/settings-1-users-1024x278.png') }}"
                             alt="Volunteer administrator, settings module, users section">
                    </div>

                    <ul>
                        <li><span style="font-weight: 400;">Create users by clicking “+” button.</span></li>
                        <li style="font-weight: 400;"><span style="font-weight: 400;">Create more coordinators or add new administrators</span>
                        </li>
                        <li style="font-weight: 400;"><span style="font-weight: 400;">Set their preferences – chose their groups and areas and if they should see all volunteers or only the ones who belong to their groups and areas.</span>
                        </li>
                    </ul>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="783" height="709"
                             src="{{ asset('images/settings-2-users.png') }}"
                             alt="volunteer administrator, coordinator edit user">
                    </div>

                    <ul>
                        <li style="font-weight: 400;"><span style="font-weight: 400;">Edit users.</span>
                            <ul>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Click on the field in grey background while scroll and edt the user profile. </span>
                                </li>
                            </ul>
                        </li>
                        <li style="font-weight: 400;"><span style="font-weight: 400;">Delete users.</span></li>
                    </ul>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="785" height="705"
                             src="{{ asset('images/settings-3-users.png') }}"
                             alt="volunteer administrator, coordinator edit user">
                    </div>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="939" height="943"
                             src="{{ asset('images/settings-4-users.png') }}" alt="Admin settings option, deleteing a user">
                    </div>

                    <p><span style="font-weight: 400;">5. Export. </span></p>
                    <ul>
                        <li><span style="font-weight: 400;">Export all of your data. </span></li>
                    </ul>
                    <p><span style="font-weight: 400;">6. Change log.&nbsp;</span></p>
                    <ul>
                        <li style="font-weight: 400;"><span style="font-weight: 400;">Follow through the changes and actions you performed. </span>
                        </li>
                        <li style="font-weight: 400;"><span style="font-weight: 400;">Access the old data and compare to the new entry. </span>
                        </li>
                        <li style="font-weight: 400;"><span style="font-weight: 400;">Follow up when you made the changes.</span>
                        </li>
                    </ul>

                    <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                        <img width="1024" height="624"
                             src="{{ asset('images/settings-1-change-log-1024x624.png') }}"
                             alt="Admin profile, coordinator profile, change log">
                    </div>
                </div>
            </div>

            <div class="wrapper-latest-features-content-2">
                <h3 class="wow fadeIn" style=""><strong><span style="text-decoration: underline;">Volunteers</span></strong></h3>

                <div class="wrapper-latest-features-content">
                    <div class="tab">
                        <button href="#" class="tab-item tablinks tablinks2" onclick="openTabs2(event, 'Dashboard2')"
                                id="defaultOpen2">
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
                        <p><strong>Your way to communicate and get up-to-date information from your coordinator and
                                administrators. Dashboard is the first page that loads on your screen once you log
                                in.</strong></p>

                        <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                            <img width="1024" height="517"
                                 src="{{ asset('images/volunteer-dashboard-1-1024x517.png') }}" alt="Volunteer dashboard view">
                        </div>

                        <p><span style="font-weight: 400;">1. Comment on post: Click on Comments filed&nbsp;</span><span
                                style="font-weight: 400;">and the post will open with text area where you can type your comments and click “Send”.</span>
                        </p>

                        <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                            <img width="1024" height="508"
                                 src="{{ asset('images/volunteer-dashboard-3-1024x508.png') }}" alt="Dasboard in volunteer profile">
                        </div>

                        <p><span style="font-weight: 400;">2. Can I attach files on my Comments? – No. This is not an option yet. We will let you know when you are able to do that. </span>
                        </p>
                        <p><span style="font-weight: 400;">3. Can I create posts? – No. Only the administrators and coordinators can do that. The volunteer can comment on posts. </span>
                        </p>
                        <p><span style="font-weight: 400;">4. How can I edit my Comments? – This is not an option yet. We will let you know when you are able to do that. </span>
                        </p>
                        <p><span style="font-weight: 400;">5. How can I delete my Comments? – This is not an option yet. We will let you know when you are able to do that.</span>
                        </p>
                    </div>

                    <div id="MyProfile2" class="tabcontent2">
                        <p><strong>Manage your personal profile.</strong></p>
                        <p><span style="font-weight: 400;">1. Profile tab. Manage your basic data here.</span></p>
                        <ul>
                            <li style="font-weight: 400;"><span style="font-weight: 400;">You can edit your profile picture by clicking on it. </span>
                            </li>
                            <li style="font-weight: 400;"><span style="font-weight: 400;">Change your notification preferences and verify your contact details.</span>
                            </li>
                        </ul>

                        <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                            <img width="1024" height="606"
                                 src="{{ asset('images/volunteer-my-profile-1-1024x606.png') }}"
                                 alt="Volunteer profile, profile tab, volunteer details, confirm phone number">
                        </div>

                        <p><span style="font-weight: 400;">2. Account tab. </span></p>
                        <ul>
                            <li style="font-weight: 400;"><span style="font-weight: 400;">Change your password</span>
                            </li>
                            <li style="font-weight: 400;"><span style="font-weight: 400;">Or edit your email</span></li>
                        </ul>

                        <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                            <img width="1024" height="303"
                                 src="{{ asset('images/volunteer-my-profile-2-1024x303.png') }}"
                                 alt="Volunteer profile, edit password, edit account, account settings">
                        </div>

                        <p><span style="font-weight: 400;">3. Availability tab. </span></p>
                        <ul>
                            <li style="font-weight: 400;"><span style="font-weight: 400;">Enter your availability – click “Add” button</span><span
                                    style="font-weight: 400;">&nbsp;click “Save” on the pop up and then “Save”on the initial pop up window. You can easily fix a wrongfully entered availability just using drag and drop.</span>
                            </li>
                        </ul>

                        <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                            <img width="1024" height="626"
                                 src="{{ asset('images/volunteer-my-profile-3-1024x626.png') }}"
                                 alt="Volunteer availability, enter availability">
                        </div>

                        <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                            <img width="1024" height="528"
                                 src="{{ asset('images/volunteer-my-profile-4-1024x528.png') }}"
                                 alt="Volunteer avalability, move availability">
                        </div>

                        <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                            <img width="1024" height="522"
                                 src="{{ asset('images/volunteer-my-profile-5-1024x522.png') }}" alt="Volunteer availability,">
                        </div>
                    </div>

                    <div id="Messages2" class="tabcontent2">
                        <p><strong>Exchange emails with your fellow volunteers or turn to your
                                coordinators.&nbsp;&nbsp;</strong></p>
                        <p><span style="font-weight: 400;">1. This is your inbox:</span></p>

                        <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                            <img width="1024" height="509"
                                 src="{{ asset('images/volunteers-messages-1-1024x509.png') }}"
                                 alt="Volunteers messaging module, messages module">
                        </div>

                        <p><span style="font-weight: 400;">2. Create new message. </span></p>
                        <ul>
                            <li style="font-weight: 400;"><span style="font-weight: 400;">Press “+” button. A pop up appears with many useful options.&nbsp;</span>
                                <ul>
                                    <li style="font-weight: 400;"><span style="font-weight: 400;">Send a message to all active volunteers or include inactive as well. Note: when you personally want to address a volunteer do not switch the button on because your message will be automatically sent to all active volunteers as well. </span>
                                    </li>
                                    <li style="font-weight: 400;"><span style="font-weight: 400;">Select groups for your message</span>
                                    </li>
                                    <li style="font-weight: 400;"><span style="font-weight: 400;">Select areas </span>
                                    </li>
                                    <li style="font-weight: 400;"><span style="font-weight: 400;">Select volunteers – personalize your message </span>
                                    </li>
                                    <li style="font-weight: 400;"><span style="font-weight: 400;">Send a copy to your coordinator or fellow coordinators and administrators.</span>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                        <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                            <img width="1024" height="691"
                                 src="{{ asset('images/volunteers-messages-2-1024x691.png') }}" alt="Volunteer messging, messages module">
                        </div>

                        <p><span style="font-weight: 400;">3. If you have been sent message inside the app – you will receive notification by your prefered method of contact. </span>
                        </p>
                        <ul>
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

                    <div id="Schedule2" class="tabcontent2">
                        <p><strong>Your assignments in one place – easy to grab and reject.</strong></p>
                        <ol>
                            <li><span
                                    style="font-weight: 400;">Three comfortable views for your convenience – List:</span><span
                                    style="font-weight: 400;">&nbsp;</span></li>
                        </ol>

                        <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                            <img width="1024" height="613"
                                 src="{{ asset('images/volunteer-my-schedule-1-1024x613.png') }}"
                                 alt="Schedule of the volunteer, shifts of the volunteer">
                        </div>

                        <p><span style="font-weight: 400;">Week:</span></p>

                        <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                            <img width="1024" height="624"
                                 src="{{ asset('images/volunteer-my-schedule-2-1024x624.png') }}" alt="Schedule week view, schedule module">
                        </div>

                        <p><span style="font-weight: 400;">Month</span><span style="font-weight: 400;">:</span></p>

                        <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                            <img width="1024" height="510"
                                 src="{{ asset('images/volunteer-my-schedule-3-1024x510.png') }}" alt="Volunteer schedule month view">
                        </div>

                        <p><span style="font-weight: 400;">2. You can search shifts by their status or start and end date.</span>
                        </p>

                        <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                            <img width="1024" height="306"
                                 src="{{ asset('images/volunteer-my-schedule-4-1024x306.png') }}" alt="Volunteer schedule, shifts statuses">
                        </div>

                        <p><span style="font-weight: 400;">3. Apply for a shift.</span></p>

                        <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                            <img width="1024" height="492"
                                 src="{{ asset('images/volunteer-my-schedule-5-1024x492.png') }}" alt="How to grab shift, volunteer shifts">
                        </div>

                        <p><span style="font-weight: 400;">4. Or reject a shift.</span></p>

                        <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                            <img width="1024" height="502"
                                 src="{{ asset('images/volunteer-my-schedule-6-1024x502.png') }}"
                                 alt="how to reject shift, volunteer shifts rejection">
                        </div>
                    </div>

                    <div id="Events2" class="tabcontent2">
                        <p><strong>Know the upcoming events in the organisation by following the Events
                                calendar.</strong></p>
                        <p><span
                                style="font-weight: 400;">1. Three comfortable views for your convenience – List:</span>
                        </p>

                        <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                            <img width="1024" height="370"
                                 src="{{ asset('images/volunteer-events-1-1024x370.png') }}"
                                 alt="Events, events module, events list view">
                        </div>

                        <p><span style="font-weight: 400;">Week:</span></p>

                        <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                            <img width="1024" height="515"
                                 src="{{ asset('images/volunteer-events-2-1024x515.png') }}"
                                 alt="Events module, events, events week view">
                        </div>

                        <p><span style="font-weight: 400;">and Month:</span></p>

                        <div class="tabcontent-content vc_box_shadow_3d box_shadow">
                            <img width="1024" height="448"
                                 src="{{ asset('images/volunteer-events-3-1024x448.png') }}" alt="Events, events module month view">
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
