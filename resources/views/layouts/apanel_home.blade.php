<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Brimstone CMS</title>
    
    <link rel="Brimstone CMS" href="favicon_bcms.ico" type="image/x-icon">

    <!-- Styles -->
    <link href="{{ asset('css/apanel_gen_styles.css') }}" rel="stylesheet">
</head>
<body class="login-bg">

    @yield('content')

</body>
</html>
