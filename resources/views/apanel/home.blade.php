@extends('layouts.apanel_home')

@section('content')
<section id="bg-hover"></section>
<section class="login-container login-landn">
    <form action="{{ url('/apanel/login') }}" method="POST" class="login-form-container">
        {{ csrf_field() }}
        <article>
            <img src="{{ asset('images/brimstonecms_logo.png') }}" class="app-name">
        </article>
        
        <article>{{ @$errorMessage }}</article>

        <input type="text" name="apUsername" placeholder="Username">
        <input type="password" name="apPassword" placeholder="Password">
        <article>
            <button type="submit">
                Login
            </button>
        </article>
    </form>

    <article class="login-copy">
        v1.0.0 | Developed by <a href="https://www.enovivostudio.com" target="_blank">Enovivo Studio</a>
    </article>
</section>
@endsection
