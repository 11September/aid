<link href='{{ asset('css/style.css') }}' rel='stylesheet'/>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

<script>
    /* You can add more configuration options to webfontloader by previously defining the WebFontConfig with your options */
    if (typeof WebFontConfig === "undefined") {
        WebFontConfig = new Object();
    }

    WebFontConfig['google'] = {families: ['Muli:400', 'Roboto:900,400,500', 'Montserrat:300,700,600,400,500&subset=latin']};

    (function () {
        var wf = document.createElement('script');
        wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.3/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
    })();
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        var lazyloadImages;

        if ("IntersectionObserver" in window) {
            lazyloadImages = document.querySelectorAll(".lazy");
            var imageObserver = new IntersectionObserver(function (entries, observer) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        var image = entry.target;
                        image.src = image.dataset.src;
                        image.classList.remove("lazy");
                        imageObserver.unobserve(image);
                    }
                });
            });

            lazyloadImages.forEach(function (image) {
                imageObserver.observe(image);
            });
        } else {
            var lazyloadThrottleTimeout;
            lazyloadImages = document.querySelectorAll(".lazy");

            function lazyload() {
                if (lazyloadThrottleTimeout) {
                    clearTimeout(lazyloadThrottleTimeout);
                }

                lazyloadThrottleTimeout = setTimeout(function () {
                    var scrollTop = window.pageYOffset;
                    lazyloadImages.forEach(function (img) {
                        if (img.offsetTop < (window.innerHeight + scrollTop)) {
                            img.src = img.dataset.src;
                            img.classList.remove('lazy');
                        }
                    });
                    if (lazyloadImages.length == 0) {
                        document.removeEventListener("scroll", lazyload);
                        window.removeEventListener("resize", lazyload);
                        window.removeEventListener("orientationChange", lazyload);
                    }
                }, 20);
            }

            document.addEventListener("scroll", lazyload);
            window.addEventListener("resize", lazyload);
            window.addEventListener("orientationChange", lazyload);
        }
    });
</script>

<script src="{{ asset('js/superfish.min.js') }}"></script>
<script src="{{ asset('js/wow.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

<script> (function () {
        var v = document.getElementsByClassName("youtube-player");
        for (var n = 0; n < v.length; n++) {
            v[n].onclick = function () {
                var iframe = document.createElement("iframe");
                iframe.setAttribute("src", "//www.youtube.com/embed/" + this.dataset.id + "?autoplay=1&autohide=2&border=0&wmode=opaque&enablejsapi=1&rel=" + this.dataset.related + "&controls=" + this.dataset.control + "&showinfo=" + this.dataset.info);
                iframe.setAttribute("frameborder", "0");
                iframe.setAttribute("id", "youtube-iframe");
                iframe.setAttribute("style", "width: 100%; height: 100%; position: absolute; top: 0; left: 0;");
                if (this.dataset.fullscreen == 1) {
                    iframe.setAttribute("allowfullscreen", "");
                }
                while (this.firstChild) {
                    this.removeChild(this.firstChild);
                }
                this.appendChild(iframe);
            };
        }
    })();
</script>

<script>
    document.onreadystatechange = function () {
        if (document.readyState == "complete") {
            var logout_link = document.querySelectorAll('a[href*="wp-login.php?action=logout"]');
            if (logout_link) {
                for (var i = 0; i < logout_link.length; i++) {
                    logout_link[i].addEventListener("click", function () {
                        Intercom('shutdown');
                    });
                }
            }
        }
    };

    window.intercomSettings = {"app_id": "n2cpz0ku"};

    (function () {
        var w = window;
        var ic = w.Intercom;
        if (typeof ic === "function") {
            ic('reattach_activator');
            ic('update', intercomSettings);
        } else {
            var d = document;
            var i = function () {
                i.c(arguments)
            };
            i.q = [];
            i.c = function (args) {
                i.q.push(args)
            };
            w.Intercom = i;

            function l() {
                var s = d.createElement('script');
                s.type = 'text/javascript';
                s.async = true;
                s.src = 'https://widget.intercom.io/widget/n2cpz0ku';
                var x = d.getElementsByTagName('script')[0];
                x.parentNode.insertBefore(s, x);
            }

            if (w.attachEvent) {
                w.attachEvent('onload', l);
            } else {
                w.addEventListener('load', l, false);
            }
        }
    })();
</script>

<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '{{ asset('js/analytics.js') }}', 'ga');
    ga('create', 'UA-119341282-1', 'auto');
    ga('send', 'pageview');
</script>
