@extends('layouts.main')

@section('head')
    <title>Register</title>
@endsection

@section('content')
@if (count($errors) > 0)
    <div class="uk-alert uk-alert-danger uk-text-center uk-margin-top-remove">
        <strong>Warning!</strong> You got some errors
            @foreach ($errors->all() as $error)
                | {{ $error }}
            @endforeach
    </div>
@endif
@if (session('email'))
    <div class="uk-alert uk-alert-primary uk-text-center uk-margin-top-remove">
        <strong>Hello!</strong> Since this is the first time you are logging in using facebook, 
        please choose a username and password.
    </div>
@endif
<div class="uk-container uk-container-center uk-margin-large-top">
    <img class="uk-margin-bottom uk-align-center" width="250px" src="{{ asset('assets/img/dmo-logo.png') }}" alt="">
    
    <div class="uk-grid uk-container-center">
        

        <form class="uk-panel uk-panel-box uk-form uk-width-medium-1-2 uk-container-center"   
            method="POST" action="{{ route('registerStore') }}"
            
        >
            {!! csrf_field() !!}

            <input name="avatar" type="hidden" value="{{ session('avatar') }}">

            <div class="uk-form-row">
                <input class="uk-width-1-1 uk-form-large" type="text" 
                    placeholder="Username" name="username"
                >
            </div>
            <div class="uk-form-row">
                <input class="uk-width-1-1 uk-form-large" type="text" 
                    placeholder="Email" value="{{ session('email') }}" name="email"
                >
            </div>
            <div class="uk-form-row">
                <input class="uk-width-1-1 uk-form-large" type="password" 
                    placeholder="Password" name="password"
                >
            </div>
            <div class="uk-form-row">
                <input class="uk-width-1-1 uk-form-large" type="password" 
                    placeholder="Confirm Password" name="password_confirmation"
                >
            </div>
            <div class="uk-form-row">
                <button class="uk-width-1-1 uk-button uk-button-primary uk-button-large"
                    type="submit"
                >Create Account</button>
            </div>
        </form>

        <div class="uk-panel uk-panel-box uk-text-justify uk-width-medium-1-2 uk-container-center" >
            <div class="uk-panel-title uk-text-center">Username Policy</div>
            <ol>
                <li>Username is only used to identify a user in this site.</li>
                <li>Username on this site IS NOT a Game ID or a character IGN.</li>
                <li>Please refrain yourself from choosing a username that might be offensive to anyone.</li>
                <li>We have the right to change a user's username if we thinks the chosen username is inappropriate.</li>
            </ol>
        </div>
    </div>
</div>
@endsection