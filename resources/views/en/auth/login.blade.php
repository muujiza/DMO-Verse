@extends('layouts.main')

@section('head')
	<title>Login</title>
@endsection

@section('content')
@if (count($errors) > 0)
    <div class="uk-alert uk-alert-danger uk-text-center">
    <strong>Warning!</strong> You got some errors
        @foreach ($errors->all() as $error)
           | {{ $error }}
        @endforeach
    </div>
@endif

<div class="uk-vertical-align uk-text-center uk-height-1-1 uk-margin-large-top">
    <div class="uk-vertical-align-middle" style="width: 250px;">

        <img class="uk-margin-bottom" width="250" height="120" src="{{ asset('assets/img/dmo-logo.png') }}" alt="">

        <form class="uk-panel uk-panel-box uk-form" method="POST" action="{{ route('loginStore') }}">
        	{!! csrf_field() !!}

            <div class="uk-form-row">
                <input class="uk-width-1-1 uk-form-large" type="text" placeholder="Username" name="username">
            </div>
            <div class="uk-form-row">
                <input class="uk-width-1-1 uk-form-large" type="text" placeholder="Password" name="password">
            </div>
            <div class="uk-form-row">
                <button class="uk-width-1-1 uk-button uk-button-primary uk-button-large" type="submit">Login</button>
            </div>
            <div class="uk-form-row uk-text-small">
                <label class="uk-float-left"><input type="checkbox" name="remember"> Remember Me</label>
                <a class="uk-float-right uk-link uk-link-muted" href="#">Forgot Password?</a>
            </div>
        </form>

        <div class="uk-panel uk-panel-box">
            <a class="uk-width-1-1 uk-button uk-button-primary uk-button-large" href="{{ route('loginFB') }}">
            <i class="uk-icon-facebook"></i> Login with Facebook</a>
        </div>

    </div>
</div>
@endsection