<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My Web Portfolio</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
          integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

    <link href="{{ mix('/css/app.css') }}" rel="stylesheet"/>
    <script src="{{ mix('/js/app.js') }}" defer></script>
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
</body>
</html>
