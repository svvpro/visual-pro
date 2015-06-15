<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Visual-pro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link href="{{ asset('/css/all.css') }}" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="{{ asset('/css/vendor/bannerscollection_zoominout.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/vendor/animate.css') }}" rel="stylesheet">
    @include('partials.google_fonts');


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js" ></script>
    <script src="../js/jquery.ui.touch-punch.min.js "  type="text/javascript"></script>
    <script src="../js/bannerscollection_zoominout.js" type="text/javascript"></script>


    <script>
        jQuery(function() {
            jQuery('#bannerscollection_zoominout_generous').bannerscollection_zoominout({
                skin: 'generous',
                responsive: true,
                width: 1920,
                height: 1200,
                width100Proc: true,
                height100Proc: true,
                fadeSlides: true,
                showNavArrows: false,
                showBottomNav: false,
                thumbsOnMarginTop: 11,
                thumbsWrapperMarginTop: -110,
                autoHideBottomNav: false,
                pauseOnMouseOver: false
            });
        });
    </script>

    {{--endMylayout--}}
</head>
<body>

    @include('components.nav')
    @yield('content')

<!-- Scripts -->
{{--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>--}}
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
