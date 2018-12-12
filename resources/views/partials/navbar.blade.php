<header id="header" class="header header-hide">
    <div class="container">

        <div id="logo" class="pull-left">
            <a href="{{ url('/') }}">
                <img src="{{ asset('images/logo-new-website-retina.png') }}" alt="AidSpace" class="logo">
            </a>
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="{{ Request::is('/') ? 'menu-active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
                <li class="{{ Request::is('roadmap') ? 'menu-active' : '' }}"><a href="{{ url('/roadmap') }}">Roadmap</a></li>
                <li class="{{ Request::is('faq') ? 'menu-active' : '' }}"><a href="{{ url('/faq') }}">FAQ</a></li>
                <li class="{{ Request::is('how-it-works') ? 'menu-active' : '' }}"><a href="{{ url('/how-it-works') }}">How it works</a></li>
                <li class="{{ Request::is('contacts') ? 'menu-active' : '' }}"><a href="{{ url('/contacts') }}">Contact us</a></li>
                <li><a href="{{ url('https://volunteers.aidspace.io/login') }}">LOGIN</a></li>
                <li><a href="{{ url('https://volunteers.aidspace.io/signup') }}">FREE TRIAL</a></li>
            </ul>
        </nav>
    </div>
</header>




