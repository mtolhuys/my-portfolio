<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Deisi | Personal Blog</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="js/bootstrap/css/bootstrap.min.css">
    <!-- Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Satisfy&amp;display=swap">
    <!-- Lightbox-->
    <link rel="stylesheet" href="js/lightbox2/css/lightbox.min.css">

    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
          integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}"></link>
    <script src="{{ mix('/js/app.js') }}" defer></script>
    <!-- Recaptcha-->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- Recaptcha-->
</head>
<style rel="stylesheet">
    /* Sticky Footer Classes */

    html,
    body {
        height: 100%;
    }

    #page-content {
        flex: 1 0 auto;
    }

    #sticky-footer {
        flex-shrink: 0;
    }
</style>
<body class="antialiased d-flex flex-column">
@inertia
<!-- JavaScript files-->
<script src="js/jquery/jquery.min.js"></script>
<script src="js/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="js/lightbox2/js/lightbox.min.js"></script>
<script src="js/front.js"></script>

<script src="https://www.google.com/recaptcha/api.js?render={{ env('GOOGLE_CAPTCHA_PUBLIC_KEY') }}"></script>

<script>
    grecaptcha.ready(function() {
        grecaptcha.execute('{{ env('GOOGLE_CAPTCHA_PUBLIC_KEY') }}')    .then(function(token) {
            document.getElementById("recaptcha_token").value = token;
        }); });
</script>

<!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</body>
</html>
