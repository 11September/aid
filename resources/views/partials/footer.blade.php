<footer>
    <div class="container">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="footer-top-item">
                            <h4>Company</h4>
                            <p>
                                <a href="{{ url('about') }}">About us</a><br/>
                            </p>
                            <p>
                                <a href="{{ url('/sustainable-development') }}">Sustainable development</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="footer-top-item">
                            <h4>Our Digital Tools</h4>
                            <p>
                                <a href="{{ url('/') }}">AidSpace Volunteers</a>
                            </p>
                            <p>
                                <a href="{{ url('aidspace-people') }}">AidSpace People</a>
                            </p>
                            <p>
                                <a href="{{ url('aidspace-maps') }}">AidSpace Maps</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="footer-top-item">
                            <h4><a class="footer-top-item-heading-link" href="{{ url('legal') }}">Legal Overview</a></h4>
                            <p><a href="{{ url('legal/terms-of-service') }}">Terms of Service</a></p>
                            <p><a href="{{ url('legal/cookie-policy') }}">Cookie Policy</a></p>
                            <p><a href="{{ url('legal/privacy-policy') }}">Privacy Policy</a></p>
                            <p><a href="{{ url('legal/gdpr') }}">GDPR</a></p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="footer-top-item">
                            <h4>Contact Us</h4>
                            <p><a href="mailto:info@aidspace.io" target="_blank" rel="noopener">info@aidspace.io</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row footer-bottom-flex">

                    <div class="col-md-3 col-lg-2">
                        <div class="footer-bottom-item">
                            <a href="{{ url('legal/privacy-policy') }}">Privacy Policy</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-2">
                        <div class="footer-bottom-item">
                            <a href="{{ url('legal/terms-of-service') }}">Terms of service</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-2">
                        <div class="footer-bottom-item">
                            <a href="{{ url('legal/cookie-policy') }}">Cookie Policy</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</footer>
