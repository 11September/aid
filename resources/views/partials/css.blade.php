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
<link rel='stylesheet' id='tp-open-sans-css'
      href='https://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C600%2C700%2C800&amp;ver=4.9.8'
      type='text/css' media='all'/>
<link rel='stylesheet' id='tp-raleway-css'
      href='https://fonts.googleapis.com/css?family=Raleway%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900&amp;ver=4.9.8'
      type='text/css' media='all'/>
<link rel='stylesheet' id='googleFonts-css' href='https://fonts.googleapis.com/css?family=Montserrat&amp;ver=4.9.8'
      type='text/css' media='all'/>

<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
<link href='{{ asset('css/style.css') }}' rel='stylesheet'/>
