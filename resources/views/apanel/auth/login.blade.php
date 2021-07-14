<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Brimstone CMS') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/apanel_gen_styles.css') }}" rel="stylesheet">
</head>
<body class="login-bg">

    <section id="bg-hover"></section>
    <section class="login-container">

            <article class="app-name">
                <img src="{{ asset('images/brimstonecms_logo.png') }}">
            </article>

            <!--article class="login-page-info">
                <h3>Welcome back!</h3> <h1>Brimstone CMS</h1>
            </article-->

            <article class="login-form-container">
                <form class="form-horizontal" role="form" method="POST" action="{{ route('apanel.login') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">

                        <div class="col-md-6">
                            <input id="username" type="text" class="form-control" name="username" placeholder="Username" value="{{ old('username') }}" required autofocus>

                            @if ($errors->has('username'))
                                <span class="help-block">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"
                                           name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Login
                            </button>

                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                        </div>
                    </div>
                </form>

                <div class="form-group" style="text-align: center; border-top: 1px solid #ddd; padding-top: 10px;">
                    <a class="btn btn-link" href="/">
                        <i class="fa fa-tv"></i> Go to website <i class="fa fa-long-arrow-right"></i>
                    </a>
                </div>
            </article>
        
    </section>
    <article class="login-copy">&copy; Brimstone CMS v1.0.1 <br>
        Developed by <a href="https://www.enovivostudios.com/" target="_blank">Enovivo Studios, LLC</a>
    </article>

</body>
</html>
