<script>
    /* You can add more configuration options to webfontloader by previously defining the WebFontConfig with your options */
    if ( typeof WebFontConfig === "undefined" ) {
        WebFontConfig = new Object();
    }

    WebFontConfig['google'] = {families: ['Muli:400', 'Roboto:900,400,500', 'Montserrat:300,700,600,400,500&subset=latin']};

    (function() {
        var wf = document.createElement( 'script' );
        wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.3/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName( 'script' )[0];
        s.parentNode.insertBefore( wf, s );
    })();
</script>

<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link href='{{ asset('css/style.css') }}' rel='stylesheet'/>
<link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
